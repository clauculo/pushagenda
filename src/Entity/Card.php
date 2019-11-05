<?php
namespace App\Entity;

class Card
{
    public $color = '';
    public $number = 0;
    public $isNar = false;
    public $isWizard = false;

    /**
     * Card constructor.
     *
     * @param $color
     * @param $number
     * @param $isNar
     * @param $isWizard
     */
    public function __construct($color, $number, $isNar, $isWizard)
    {
        $this->color = $color;
        $this->number = $number;
        $this->isNar = $isNar;
        $this->isWizard = $isWizard;
    }
}