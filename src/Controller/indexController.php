<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class indexController extends AbstractController
{
    #[Route(path: '/', name: 'index.get', methods: ['GET'])]
    public function index()
    {
        return $this->render('index2.html.twig');
    }
    #[Route('/test{trailingSlash}', name: 'test', requirements: ['trailingSlash' => '/?'])]
    public function index2()
    {
        return $this->render('index2.html.twig');
    }
    #[Route('/wouter', name: 'wouter', requirements: ['trailingSlash' => '/?'])]
    public function wouter()
    {
        return $this->render('index3.html.twig');
    }
    #[Route('/daphne', name: 'daphne.get')]
    public function daphne()
    {
        return $this->render('index2.html.twig');
    }
    #[Route('/daphne_name', name: 'daphne_game.get')]
    public function daphneGame()
    {
        return $this->render('daphne_game.html.twig');
    }

    #[Route('/lisanne_name', name: 'lisanne_game.get')]
    public function lisanneGame()
    {
        return $this->render('lisanne_game.html.twig');
    }

    #[Route('/aline', name: 'aline.get')]
    public function aline()
    {
        return $this->render('aline.html.twig');
    }
    #[Route('/daphne2', name: 'daphne2.get')]
    public function daphne2()
    {
        return $this->render('daphne.html.twig');
    }
    #[Route('/pushagenda', name: 'pushagenda.get')]
    public function pushagenda()
    {
        return $this->render('pushagenda.html.twig');
    }
}
