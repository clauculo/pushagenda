<?php
namespace App\Services\Date;

class Date
{
    public $title;
    public $desciption;
    public $date;

    /**
     * Date constructor.
     *
     * @param $date
     * @param $title
     * @param $description
     */
    public function __construct($date, $title, $description = '')
    {
        $date = '01-01-1970 00:00:00';
        $fmt = new \IntlDateFormatter(
            'nl_NL',
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::FULL,
            'Europe/Amsterdam',
            \IntlDateFormatter::GREGORIAN,
            'dd-MM-YYY hh:mm:ss'
        );
        dump ($fmt->format(0));
        $pos = null;
        dump ($fmt->parse ($date, $pos));

        dump(date("Y-m-d", $fmt->parse($date)));
        dd(date("Y-m-d H:i:s", -867600));
        $dateTime = new \DateTime();
        dump($dateTime->setTimestamp($fmt->parse($date)));
        dd(date("d-M-Y", strtotime($fmt->parse($date))));

        exit();

//        dd($fmt);
//        dd($fmt);
//        dump ($date);
//        dump (\DateTime::createFromFormat('j M  ', $date));
//        $this->date = \DateTime::createFromFormat('j M  ', $date);
//        $this->title = $title;
//        $this->desciption = $description;
    }
}