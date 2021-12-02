<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomSpaceController extends AbstractController
{
    /**
     * @Route("/custom/space", name="custom_space")
     */
    public function index(): Response
    {
        return $this->render('custom_space/index.html.twig', [
            'controller_name' => 'CustomSpaceController',
        ]);
    }
}
