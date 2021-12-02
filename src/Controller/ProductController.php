<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductActor;
use App\Entity\Actor;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository, 
        CategoryRepository $categoryRepository): Response
    {
        $footerProducts = $productRepository->findTheBestConsume(2);
        $movies = $productRepository->findNewProduct(12);
        $categories = $categoryRepository->findAll();
        $rates = [3.0, 4.0, 5.0, 8.3, 8.4, 5.5, 6.0, 7.2, 4.6, 3.3, 5.4, 6.3];

        return $this->render('product/frontindex.html.twig', [
            'pfooters' => $footerProducts,
            'movies' => $movies,
            'categories' => $categories,
            'rate' => $rates
        ]);
    }

    /**
     * @Route("/admin/product/index", name="back_product_index", methods={"GET"})
     */
    public function indexProduct(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/product/create", name="product_new", methods={"GET","POST"})
     */
    public function new(Request $request, FileUploader $fileUploader): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() /*&& $form->isValid()*/) {
            //--
            $file = $request->files->get('product')['icone'];
            
            $actors = $request->request->get('product')['actor'];
            $entityManager = $this->getDoctrine()->getManager();
            $product->setIcone("")->setStatus(0);
            $entityManager->persist($product);
            $entityManager->flush();

            $fileName = $this->saveFile($file, $product->getProductId());
            //$fileName = $fileUploader->upload($file, $product->getProductId());
            $product->setIcone($fileName);

            if (count($actors) > 0) {
                foreach ($actors as $key => $actorId) {
                    $actor = $entityManager->getRepository(Actor::class)->find($actorId);
                    $actorProductName = new ProductActor($product, $actor);
                    $entityManager->persist($actorProductName);
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('back_product_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product/new.html.twig', [
            'product' => $product,
            'form' => $form,
            'actors' => [] 
        ]);
    }

    /**
     * @Route("/product/{product_id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product, ProductRepository $productRepository): Response
    {
        $category = $product->getCategory()->getCategoryId();
        $relatedProducts = $productRepository->findProductByCategory($category, $product->getProductId());
        //
        $rates = [3, 4, 5, 8.3, 8.4, 5.5, 6, 7.2, 4.6, 3.3, 5.4, 6.3];
        return $this->render('product/details.html.twig', [
            'product' => $product,
            'related_products' => $relatedProducts,
            'rate' => $rates
        ]);
    }   

    /**
     * @Route("/admin/product/{product_id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $em = $this->getDoctrine()->getManager();
        $oldActors = $em->getRepository(ProductActor::class)->findByProduct($product->getProductId());

        $form->handleRequest($request);

        if ($form->isSubmitted() /*&& $form->isValid()*/) {
            
            $file = $request->files->get('product')['icone'];
            //
            $product->setStatus(0);
            if (!empty($file)) {
                $fileName = $this->saveFile($file, $product->getProductId());
                $product->setIcone($fileName);
            } else {
                $uow = $em->getUnitOfWork();
                $originalData = $uow->getOriginalEntityData($product);
                $product->setIcone($originalData['icone']);
            }

            if (count($oldActors) > 0) {
                foreach ($oldActors as $actorId) {
                    $actor = $em->getRepository(ProductActor::class)->find($actorId);
                    $em->remove($actor);
                }
            }
            $em->flush();

            $actors = $request->request->get('product')['actor'];
            if (count($actors) > 0) {
                foreach ($actors as $key => $actorId) {
                    $actor = $em->getRepository(Actor::class)->find($actorId);
                    $actorProductName = new ProductActor($product, $actor);
                    $em->persist($actorProductName);
                }
            }

            $em->flush();

            return $this->redirectToRoute('back_product_index', [], Response::HTTP_SEE_OTHER);
        }

        $pactors = [];
        if (count($oldActors) > 0) {
            foreach ($oldActors as $actor) {
                $pactors[] = $actor->getActor()->getActorId();
            }
        }
        return $this->renderForm('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
            'actors' => $pactors 
        ]);
    }

    /**
     * @Route("/admin/product/{product_id}", name="product_delete", methods={"POST"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getProductId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $product->setStatus(1);
            //$entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back_product_index', [], Response::HTTP_SEE_OTHER);
    }

    private function saveFile(UploadedFile $file, int $productId) {
        $fileName = $productId.'.'.$file->guessExtension();
        try {
                $file->move(
                    $this->getParameter('product_img_directory'),
                    $fileName
                );
        } catch (FileException $e) {
           // ... handle exception if something happens during file upload
        }
        return $fileName;
    }
}
