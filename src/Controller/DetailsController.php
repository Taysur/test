<?php

namespace App\Controller;

use App\Entity\Propr;
use App\Entity\Demande;
use App\Form\DetailType;
use App\Repository\DetailRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DetailsController extends AbstractController



{  
    
    
 


/**
    * @Route("/detail/{id}", name="app_details")
    */
   
   public function detail($id ,Request $request): Response
   {
       $details=$this->getDoctrine()->getRepository(Propr::class)->find($id) ;
       

     





       $demande = new Demande();
       $form = $this->createForm(DetailType::class,$demande);
           $form->handleRequest($request);
   
       
         
           if ($form->isSubmitted() && $form->isValid()) {
              
               $demande = $form->getData();
             
                 
   
               $em = $this->getDoctrine()->getManager();
               $em->persist($demande);
               $em->flush();
                
               // ... perform some action, such as saving the task to the database
                
               return $this->redirectToRoute('app_home');
           }
           // return $this->render('produit/ajout.html.twig', ["monform" => $form->createView()]);
   
      
     

  
       return $this->render('details/detail.html.twig', ["detail" => $details,
    
       'monform' => $form->createView(),
   
    
   ]);
   }
}
