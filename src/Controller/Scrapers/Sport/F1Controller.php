<?php
namespace App\Controller\Scrapers\Sport;

use App\Services\Date\Importer;
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
    public function index(Importer $importer)
    {
        //$nodes = new \DOMDocument('1', 'utf-8');
        $content = file_get_contents('../var/Scraping/Sport/' . $this->url);
        $crawler = new Crawler($content);
        $result = $crawler->filterXPath('//*[@id="main"]/div[2]/table//a|//*[@id="main"]/div[2]/table//td[@class="date"]');
        $iterator = $result->getIterator();
        $dates = [];
        foreach ($iterator as $item) {
            if ($item->nodeName === 'td'){
                $date = $item->nodeValue;
            } else {
                $dates[$date] = $item->nodeValue;
                $importer->newDate($date, $item->nodeValue, $item->getAttribute('title  '));
            }
        }

        //dd($dates);

        dump ($importer);


        return new Response('test');
    }
}