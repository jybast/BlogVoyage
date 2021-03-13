<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controleur des pages génériques de l'application
 */
class PageController extends AbstractController
{
    /**
     * @Route("/accueil", name="blog_accueil")
     *
     * @return Response
     */
    public function accueil(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    
    /**
     * @Route("/apropos", name="blog_apropos")
     *
     * @return Response
     */
    public function apropos(): Response
    {
        return $this->render('page/apropos.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/contact", name="blog_contact")
     *
     * @return Response
     */
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

}
