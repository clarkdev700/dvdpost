<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Customer;
use App\Repository\CustomerRepository;

class DefaultController extends AbstractController {

    /**
     * @Route("/login/admin", name="login/admin")
     */
    public function indexActionindex(CustomerRepository $CustomerRepository): Response {
       // if ($r == 0) {
            $form = $this->createloginForm();
            $form = $this-> createForm();
            return $this->render('default/login.html.twig', [array('form' => $form->createView(), 'user' => 'user')]);
     //   }
     //   $form = $this->changeMotDePasseForm();
     //   return $this->render('default/admin_expire_mdp.html.twig', array('form' => $form->createView(), 'user' => 'user'));
    }

    

   
/* return $this->render('home/index.html.twig', [
            'products' => $products,
            'pfooters' => $footerProducts,
            'movies' => $movies
        ]);
   

    return $this->renderForm('producer/new.html.twig', [
            'producer' => $producer,
            'form' => $form,
        ]);*/

   
   



       
       
   
      
        
    
    

    
    

    
}
