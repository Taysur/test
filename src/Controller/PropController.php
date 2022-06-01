<?php

namespace App\Controller;

use App\Entity\Propr;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropController extends AbstractController
{
    /**
     * @Route("/prop", name="app_prop")
     */
    public function listMaison(): Response
    {
       $maison = $this->getDoctrine()->getRepository(Propr::class)->findAll() ; 

        return $this->render('prop/maison.html.twig', ["maison" => $maison
            
        ]);
    }
}
