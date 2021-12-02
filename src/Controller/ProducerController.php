<?php

namespace App\Controller;

use App\Entity\Producer;
use App\Form\ProducerType;
use App\Repository\ProducerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/producer")
 */
class ProducerController extends AbstractController
{
    private $producerName = "";
    /**
     * @Route("/", name="producer_index", methods={"GET"})
     */
    public function index(ProducerRepository $producerRepository): Response
    {
        return $this->render('producer/index.html.twig', [
            'producers' => $producerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/create", name="producer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $producer = new Producer($this->producerName);
        $form = $this->createForm(ProducerType::class, $producer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($producer);
            $entityManager->flush();

            return $this->redirectToRoute('producer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producer/new.html.twig', [
            'producer' => $producer,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{producer_id}/edit", name="producer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Producer $producer): Response
    {
        $form = $this->createForm(ProducerType::class, $producer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('producer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producer/edit.html.twig', [
            'producer' => $producer,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{producer_id}", name="producer_delete", methods={"POST"})
     */
    public function delete(Request $request, Producer $producer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$producer->getProducer_id(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($producer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('producer_index', [], Response::HTTP_SEE_OTHER);
    }
}
