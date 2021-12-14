<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/portefolio', name: 'app_portefolio')]
    public function portefolio(): Response
    {
        return $this->render('portefolio/portefolio.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
