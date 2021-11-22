<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Product;
use App\Repository\ProductRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findNewProduct(7);
        $footerProducts = $productRepository->findTheBestConsume(2);
        $movies = $productRepository->findNewProduct(6);

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'pfooters' => $footerProducts,
            'movies' => $movies
        ]);
    }
}
