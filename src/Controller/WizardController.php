<?php
namespace App\Controller;

use App\Entity\Card;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WizardController extends AbstractController
{
    /**
     * @Route("/wizard")
     *
     * @return Response
     * @throws \Exception
     */
    public function index()
    {
        $cards = [
            new Card('red', 1, false, false),
            new Card('red', 2, false, false),
            new Card('red', 3, false, false),
            new Card('red', 4, false, false),
            new Card('red', 5, false, false),
            new Card('red', 6, false, false),
            new Card('red', 7, false, false),
            new Card('red', 8, false, false),
            new Card('red', 9, false, false),
            new Card('red', 10, false, false),
            new Card('red', 11, false, false),
            new Card('red', 12, false, false),
            new Card('red', 13, false, false),
            new Card('blue', 1, false, false),
            new Card('blue', 2, false, false),
            new Card('blue', 3, false, false),
            new Card('blue', 4, false, false),
            new Card('blue', 5, false, false),
            new Card('blue', 6, false, false),
            new Card('blue', 7, false, false),
            new Card('blue', 8, false, false),
            new Card('blue', 9, false, false),
            new Card('blue', 10, false, false),
            new Card('blue', 11, false, false),
            new Card('blue', 12, false, false),
            new Card('blue', 13, false, false),
            new Card('green', 1, false, false),
            new Card('green', 2, false, false),
            new Card('green', 3, false, false),
            new Card('green', 4, false, false),
            new Card('green', 5, false, false),
            new Card('green', 6, false, false),
            new Card('green', 7, false, false),
            new Card('green', 8, false, false),
            new Card('green', 9, false, false),
            new Card('green', 10, false, false),
            new Card('green', 11, false, false),
            new Card('green', 12, false, false),
            new Card('green', 13, false, false),
            new Card('yellow', 1, false, false),
            new Card('yellow', 2, false, false),
            new Card('yellow', 3, false, false),
            new Card('yellow', 4, false, false),
            new Card('yellow', 5, false, false),
            new Card('yellow', 6, false, false),
            new Card('yellow', 7, false, false),
            new Card('yellow', 8, false, false),
            new Card('yellow', 9, false, false),
            new Card('yellow', 10, false, false),
            new Card('yellow', 11, false, false),
            new Card('yellow', 12, false, false),
            new Card('yellow', 13, false, false),
            new Card('', 0, true, false),
            new Card('', 0, true, false),
            new Card('', 0, true, false),
            new Card('', 0, true, false),
            new Card('', 0, false, true),
            new Card('', 0, false, true),
            new Card('', 0, false, true),
            new Card('', 0, false, true),
        ];

        shuffle($cards);

        $shuffledCards = $cards;

        return $this->render('wizard.html.twig', [
                'card_color' => $cards[0]->color,
                'card_number' => $cards[0]->number,
                'card_is_nar' => $cards[0]->isNar
            ]
        );
    }
}