<?php
namespace App\Controller\Scrapers\Sport;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class F1Controller extends AbstractController
{
    private $url = 'f1.html';


    /**
     * @Route("/scrapers/sport/f1")
     *
     * @return Response
     * @throws \Exception
     */
    public function index()
    {
        //$nodes = new \DOMDocument('1', 'utf-8');
        $content = file_get_contents('../var/Scraping/Sport/f1.html');
        $crawler = new Crawler($content);
        $crawler->filterXPath('//*[@id="main"]/div[2]/table');

        foreach ($crawler->children() as $domElement) {
            dump($domElement);
        }

        return new Response('test');
    }
}