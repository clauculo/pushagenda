<?php
namespace App\Services\Date;

class Importer
{
    private $dates = [];

    public function __construct()
    {

    }

    public function newDate($date, $title, $description = '')
    {
        $this->dates[] = new Date($date, $title, $description);
    }
}