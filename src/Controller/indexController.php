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
}
