<?php
namespace F1;
use F1\Graph;


class Competition
{

    /** @var Driver[] */
    public $drivers = [];

    /** @var Team[] */
    public $teams = [];

    /**
     * Competition constructor.
     */
    public function __construct() {
        $this->initTeams();
        $this->initDrivers();
        $this->handleResultsRace1();
        $this->handleResultsRace2();
        $this->handleResultsRace3();
        $this->handleResultsRace4();
        $this->handleResultsRace5();
        $this->handleResultsRace6();
        $this->handleResultsRace7();
        $this->handleResultsRace8();
//        $this->handleResultsRace9();
//        $this->handleResultsRace10();
//        $this->handleResultsRace11();
//        $this->handleResultsRace12();
//        $this->handleResultsRace13();
//        $this->handleResultsRace14();
//        $this->handleResultsRace15();
//        $this->handleResultsRace16();
//        $this->handleResultsRace17();
//        $this->handleResultsRace18();
    }

    /**
     * @return string
     */
    public function getAllTeamPrices() {
        $output = "";
        foreach ($this->teams as $team) {
            $output .= $team->name . " - " . ($team->enginePrice / 1000000) . '\n';
        }

        return $output;
    }


    /**
     * Australia
     *
     * @return void
     */
    public function handleResultsRace1() {
        //Drivers
        $this->drivers[77]->price += 4000000;
        $this->drivers[77]->team->chassisPrice += 2000000;
        $this->drivers[77]->team->enginePrice += 2000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[33]->price += 3000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[16]->price += 2000000;
        $this->drivers[20]->price += 1000000;
        $this->drivers[27]->price += 1000000;
        $this->drivers[18]->price += 1000000;
        $this->drivers[7]->price += 1000000;
        $this->drivers[26]->price += 1000000;
        $this->drivers[63]->price -= 1000000;
        $this->drivers[88]->price -= 1000000;
        $this->drivers[88]->team->chassisPrice -= 1000000;
        $this->drivers[88]->team->enginePrice -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[55]->price -= 2000000;
    }

    /**
     * Bahrein
     *
     * @return void
     */
    public function handleResultsRace2() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[16]->price += 4000000;
        $this->drivers[16]->team->chassisPrice += 1000000;
        $this->drivers[16]->team->enginePrice += 1000000;
        $this->drivers[77]->price += 3000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[4]->price += 2000000;
        $this->drivers[7]->price += 1000000;
        $this->drivers[10]->price += 1000000;
        $this->drivers[23]->price += 1000000;
        $this->drivers[11]->price += 1000000;

        $this->drivers[55]->price -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[27]->price -= 1000000;
        $this->drivers[8]->price -= 1000000;
        $this->drivers[27]->team->chassisPrice -= 1000000;
        $this->drivers[27]->team->enginePrice -= 1000000;
    }

    /**
     * China
     *
     * @return void
     */
    public function handleResultsRace3() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[77]->price += 4000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[10]->price += 2000000;
        $this->drivers[16]->price += 2000000;
        $this->drivers[3]->price += 1000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[23]->price += 1000000;
        $this->drivers[7]->price += 1000000;

        $this->drivers[63]->price -= 1000000;
        $this->drivers[27]->price -= 1000000;
        $this->drivers[4]->team->chassisPrice -= 1000000;
        $this->drivers[4]->team->enginePrice -= 1000000;
        $this->drivers[26]->price -= 1000000;
        $this->drivers[88]->price -= 1000000;
        $this->drivers[4]->price -= 1000000;
        $this->drivers[88]->team->chassisPrice -= 1000000;
        $this->drivers[88]->team->enginePrice -= 1000000;
    }

    /**
     * Azerbeidzjan
     *
     * @return void
     */
    public function handleResultsRace4() {
        $this->drivers[77]->price += 4000000;
        $this->drivers[77]->team->chassisPrice += 2000000;
        $this->drivers[77]->team->enginePrice += 2000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[5]->team->chassisPrice += 1000000;
        $this->drivers[5]->team->enginePrice += 1000000;
        $this->drivers[16]->price += 2000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[11]->price += 2000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[4]->price += 1000000;
        $this->drivers[7]->price += 1000000;
        $this->drivers[18]->price += 1000000;

        $this->drivers[88]->price -= 1000000;
        $this->drivers[8]->price -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[10]->price -= 2000000;
    }

    /**
     * Spain
     *
     * @return void
     */
    public function handleResultsRace5() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[77]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[33]->price += 3000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[16]->price += 2000000;
        $this->drivers[10]->price += 1000000;
        $this->drivers[20]->price += 1000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[26]->price += 1000000;
        $this->drivers[8]->price += 1000000;

        $this->drivers[11]->price -= 1000000;
        $this->drivers[99]->price -= 1000000;
        $this->drivers[63]->price -= 1000000;
        $this->drivers[4]->price -= 1000000;
        $this->drivers[88]->price -= 2000000;
        $this->drivers[88]->team->chassisPrice -= 1000000;
        $this->drivers[88]->team->enginePrice -= 1000000;
        $this->drivers[18]->price -= 2000000;
        $this->drivers[18]->team->chassisPrice -= 1000000;
        $this->drivers[18]->team->enginePrice -= 1000000;
    }

    /**
     * Manaco
     *
     * @return void
     */
    public function handleResultsRace6() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[77]->price += 3000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[10]->price += 2000000;
        $this->drivers[55]->price += 2000000;
        $this->drivers[26]->price += 1000000;
        $this->drivers[23]->price += 1000000;
        $this->drivers[3]->price += 1000000;
        $this->drivers[8]->price += 1000000;

        $this->drivers[18]->price -= 1000000;
        $this->drivers[7]->price -= 1000000;
        $this->drivers[88]->price -= 1000000;
        $this->drivers[16]->price -= 2000000;
        $this->drivers[99]->price -= 2000000;
        $this->drivers[88]->team->chassisPrice -= 1000000;
        $this->drivers[88]->team->enginePrice -= 1000000;
        $this->drivers[7]->team->chassisPrice -= 1000000;
        $this->drivers[7]->team->enginePrice -= 1000000;
    }

    /**
     * Canada
     *
     * @return void
     */
    public function handleResultsRace7() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[5]->price += 4000000;
        $this->drivers[16]->price += 3000000;
        $this->drivers[77]->price += 3000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[3]->price += 2000000;
        $this->drivers[27]->price += 1000000;
        $this->drivers[10]->price += 1000000;
        $this->drivers[18]->price += 1000000;

        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[5]->team->chassisPrice += 1000000;
        $this->drivers[5]->team->enginePrice += 1000000;

        $this->drivers[63]->price -= 1000000;
        $this->drivers[20]->price -= 1000000;
        $this->drivers[4]->price -= 1000000;
        $this->drivers[23]->price -= 1000000;
        $this->drivers[88]->price -= 2000000;

        $this->drivers[88]->team->chassisPrice -= 1000000;
        $this->drivers[88]->team->enginePrice -= 1000000;
    }

    /**
     * Frankrijk
     *
     * @return void
     */
    public function handleResultsRace8() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[77]->price += 4000000;
        $this->drivers[16]->price += 3000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[7]->price += 1000000;
        $this->drivers[27]->price += 1000000;
        $this->drivers[4]->price += 1000000;

        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;

        $this->drivers[20]->price -= 1000000;
        $this->drivers[88]->price -= 2000000;
        $this->drivers[63]->price -= 2000000;
        $this->drivers[8]->price -= 2000000;

        $this->drivers[8]->team->chassisPrice -= 2000000;
        $this->drivers[88]->team->enginePrice -= 2000000;
    }

    /**
     * Oostenrijk
     *
     * @return void
     */
    public function handleResultsRace9() {
        $this->drivers[33]->price += 4000000;
        $this->drivers[7]->team->chassisPrice += 1000000;
        $this->drivers[7]->team->enginePrice += 1000000;
        $this->drivers[7]->price += 4000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[8]->price += 2000000;
        $this->drivers[20]->price += 2000000;
        $this->drivers[31]->price += 2000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[14]->price += 1000000;
        $this->drivers[16]->price += 1000000;
        $this->drivers[9]->price += 1000000;

        $this->drivers[3]->price -= 1000000;
        $this->drivers[2]->price -= 1000000;
        $this->drivers[27]->price -= 1000000;
        $this->drivers[28]->price -= 1000000;
    }

    /**
     * Engeland
     *
     * @return void
     */
    public function handleResultsRace10() {
        $this->drivers[5]->price += 4000000;
        $this->drivers[5]->team->chassisPrice += 2000000;
        $this->drivers[5]->team->enginePrice += 2000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[7]->price += 3000000;
        $this->drivers[77]->price += 2000000;
        $this->drivers[3]->price += 2000000;
        $this->drivers[27]->price += 2000000;
        $this->drivers[31]->price += 1000000;
        $this->drivers[14]->price += 1000000;
        $this->drivers[20]->price += 1000000;

        $this->drivers[8]->price -= 1000000;
        $this->drivers[16]->price -= 1000000;
        $this->drivers[55]->price -= 1000000;
        $this->drivers[9]->price -= 1000000;
        $this->drivers[9]->team->chassisPrice -= 1000000;
        $this->drivers[9]->team->enginePrice -= 1000000;
        $this->drivers[28]->price -= 2000000;
        $this->drivers[28]->team->chassisPrice -= 1000000;
        $this->drivers[28]->team->enginePrice -= 1000000;
    }

    /**
     * Duitsland
     *
     * @return void
     */
    public function handleResultsRace11() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[77]->price += 4000000;
        $this->drivers[7]->price += 3000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[27]->price += 2000000;
        $this->drivers[8]->price += 1000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[31]->price += 1000000;
        $this->drivers[9]->price += 1000000;
        $this->drivers[28]->price += 1000000;
        $this->drivers[20]->price += 1000000;

        $this->drivers[14]->price -= 1000000;
        $this->drivers[35]->price -= 1000000;
        $this->drivers[18]->price -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[18]->team->chassisPrice -= 1000000;
        $this->drivers[18]->team->enginePrice -= 1000000;
    }

    /**
     * Hongarije
     *
     * @return void
     */
    public function handleResultsRace12() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[5]->team->chassisPrice += 1000000;
        $this->drivers[5]->team->enginePrice += 1000000;
        $this->drivers[3]->price += 3000000;
        $this->drivers[7]->price += 3000000;
        $this->drivers[77]->price += 2000000;
        $this->drivers[10]->price += 1000000;
        $this->drivers[20]->price += 1000000;
        $this->drivers[14]->price += 1000000;
        $this->drivers[55]->price += 1000000;

        $this->drivers[35]->price -= 1000000;
        $this->drivers[18]->price -= 1000000;
        $this->drivers[33]->price -= 1000000;
        $this->drivers[2]->price -= 1000000;
        $this->drivers[18]->team->chassisPrice -= 1000000;
        $this->drivers[18]->team->enginePrice -= 1000000;
        $this->drivers[16]->price -= 1000000;
        $this->drivers[16]->team->chassisPrice -= 1000000;
        $this->drivers[16]->team->enginePrice -= 1000000;
    }

    /**
     * België (Spa)
     *
     * @return void
     */
    public function handleResultsRace13() {
        $this->drivers[5]->price += 4000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[77]->price += 3000000;
        $this->drivers[33]->price += 3000000;
        $this->drivers[11]->price += 2000000;
        $this->drivers[31]->price += 2000000;
        $this->drivers[8]->price += 1000000;
        $this->drivers[20]->price += 1000000;
        $this->drivers[10]->price += 1000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[9]->price += 1000000;

        $this->drivers[7]->price -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[16]->price -= 1000000;
        $this->drivers[14]->price -= 1000000;
        $this->drivers[14]->team->chassisPrice -= 1000000;
        $this->drivers[14]->team->enginePrice -= 1000000;
        $this->drivers[27]->price -= 1000000;
    }

    /**
     * Italië (Monza)
     *
     * @return void
     */
    public function handleResultsRace14() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[7]->price += 4000000;
        $this->drivers[7]->team->chassisPrice += 1000000;
        $this->drivers[7]->team->enginePrice += 1000000;
        $this->drivers[77]->price += 3000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[31]->price += 1000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[18]->price += 1000000;

        $this->drivers[8]->price -= 1000000;
        $this->drivers[14]->price -= 1000000;
        $this->drivers[3]->price -= 1000000;
        $this->drivers[20]->team->chassisPrice -= 1000000;
        $this->drivers[20]->team->enginePrice -= 1000000;
        $this->drivers[28]->price -= 1000000;
        $this->drivers[28]->team->chassisPrice -= 1000000;
        $this->drivers[28]->team->enginePrice -= 1000000;
    }

    /**
     * Singapore
     *
     * @return void
     */
    public function handleResultsRace15() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[33]->price += 4000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[77]->price += 2000000;
        $this->drivers[7]->price += 2000000;
        $this->drivers[3]->price += 1000000;
        $this->drivers[14]->price += 1000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[16]->price += 1000000;

        $this->drivers[35]->price -= 1000000;
        $this->drivers[35]->team->chassisPrice -= 1000000;
        $this->drivers[35]->team->enginePrice -= 1000000;
        $this->drivers[31]->price -= 1000000;
        $this->drivers[31]->team->chassisPrice -= 1000000;
        $this->drivers[31]->team->enginePrice -= 1000000;
        $this->drivers[28]->price -= 1000000;
    }

    /**
     * Rusland
     *
     * @return void
     */
    public function handleResultsRace16() {
        $this->drivers[77]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[5]->price += 3000000;
        $this->drivers[7]->price += 2000000;
        $this->drivers[33]->price += 2000000;
        $this->drivers[3]->price += 2000000;
        $this->drivers[16]->price += 1000000;
        $this->drivers[20]->price += 1000000;
        $this->drivers[31]->price += 1000000;
//
        $this->drivers[55]->price -= 1000000;
        $this->drivers[2]->price -= 1000000;
        $this->drivers[35]->price -= 1000000;
        $this->drivers[35]->team->chassisPrice -= 1000000;
        $this->drivers[35]->team->enginePrice -= 1000000;
        $this->drivers[28]->price -= 1000000;
        $this->drivers[10]->price -= 1000000;
        $this->drivers[10]->team->chassisPrice -= 1000000;
        $this->drivers[10]->team->enginePrice -= 1000000;
    }

    /**
     * Japan
     *
     * @return void
     */
    public function handleResultsRace17() {
        $this->drivers[44]->price += 4000000;
        $this->drivers[44]->team->chassisPrice += 2000000;
        $this->drivers[44]->team->enginePrice += 2000000;
        $this->drivers[77]->price += 4000000;
        $this->drivers[33]->price += 3000000;
        $this->drivers[33]->team->chassisPrice += 1000000;
        $this->drivers[33]->team->enginePrice += 1000000;
        $this->drivers[3]->price += 2000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[7]->price += 2000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[8]->price += 1000000;
        $this->drivers[31]->price += 1000000;
        $this->drivers[55]->price += 1000000;

        $this->drivers[35]->price -= 1000000;
        $this->drivers[18]->price -= 1000000;
        $this->drivers[16]->price -= 1000000;
        $this->drivers[18]->team->chassisPrice -= 1000000;
        $this->drivers[18]->team->enginePrice -= 1000000;
        $this->drivers[20]->price -= 1000000;
        $this->drivers[27]->price -= 1000000;
    }

    /**
     * Verenigde staten
     *
     * @return void
     */
    public function handleResultsRace18() {
        $this->drivers[7]->price += 4000000;
        $this->drivers[7]->team->chassisPrice += 1000000;
        $this->drivers[7]->team->enginePrice += 1000000;
        $this->drivers[44]->price += 4000000;
        $this->drivers[33]->price += 3000000;
        $this->drivers[44]->team->chassisPrice += 1000000;
        $this->drivers[44]->team->enginePrice += 1000000;
        $this->drivers[5]->price += 2000000;
        $this->drivers[77]->price += 2000000;
        $this->drivers[27]->price += 1000000;
        $this->drivers[55]->price += 1000000;
        $this->drivers[28]->price += 1000000;
        $this->drivers[11]->price += 1000000;
        $this->drivers[9]->price += 1000000;

        $this->drivers[16]->price -= 1000000;
        $this->drivers[8]->price -= 1000000;
        $this->drivers[14]->price -= 1000000;
        $this->drivers[20]->team->chassisPrice -= 1000000;
        $this->drivers[20]->team->enginePrice -= 1000000;
        $this->drivers[31]->price -= 1000000;
        $this->drivers[20]->price -= 2000000;
    }

    /**
     * init teams
     */
    private function initTeams() {
        $mercedes = new Team();
        $mercedes->name = 'MERCEDES';
        $mercedes->enginePrice = 48000000;
        $mercedes->chassisPrice = 48000000;

        $ferrari = new Team();
        $ferrari->name = 'FERRARI';
        $ferrari->enginePrice = 46000000;
        $ferrari->chassisPrice = 46000000;

        $redbull = new Team();
        $redbull->name = 'RED BULL';
        $redbull->enginePrice = 42000000;
        $redbull->chassisPrice = 42000000;

        $renault = new Team();
        $renault->name = 'RENAULT';
        $renault->enginePrice = 33000000;
        $renault->chassisPrice = 33000000;

        $forceIndia = new Team();
        $forceIndia->name = 'RACING POINT';
        $forceIndia->enginePrice = 30000000;
        $forceIndia->chassisPrice = 30000000;

        $sauber = new Team();
        $sauber->name = 'ALFA ROMEO';
        $sauber->enginePrice = 27000000;
        $sauber->chassisPrice = 27000000;

        $haas = new Team();
        $haas->name = 'HAAS';
        $haas->enginePrice = 26000000;
        $haas->chassisPrice = 26000000;

        $mclaren = new Team();
        $mclaren->name = 'MCLAREN';
        $mclaren->enginePrice = 23000000;
        $mclaren->chassisPrice = 23000000;

        $toroRosso = new Team();
        $toroRosso->name = 'TORO ROSSO';
        $toroRosso->enginePrice = 19000000;
        $toroRosso->chassisPrice = 19000000;

        $williams = new Team();
        $williams->name = 'WILLIAMS';
        $williams->enginePrice = 18000000;
        $williams->chassisPrice = 18000000;

        $this->teams = [
            $mercedes->name => $mercedes,
            $ferrari->name => $ferrari,
            $redbull->name => $redbull,
            $mclaren->name => $mclaren,
            $forceIndia->name => $forceIndia,
            $renault->name => $renault,
            $haas->name => $haas,
            $williams->name => $williams,
            $toroRosso->name => $toroRosso,
            $sauber->name => $sauber,
        ];
    }

    private function initDrivers() {

        $driver = new Driver();
        $driver->id = 44;
        $driver->name = 'LEWIS HAMILTON';
        $driver->price = 54000000;
        $driver->team = $this->teams['MERCEDES'];
        $this->drivers[44] = $driver;

        $driver = new Driver();
        $driver->id = 5;
        $driver->name = 'SEBASTIAN VETTEL';
        $driver->price = 52000000;
        $driver->team = $this->teams['FERRARI'];
        $this->drivers[5] = $driver;

        $driver = new Driver();
        $driver->id = 77;
        $driver->name = 'VALTTERI BOTTAS';
        $driver->price = 47000000;
        $driver->team = $this->teams['MERCEDES'];
        $this->drivers[77] = $driver;

        $driver = new Driver();
        $driver->id = 33;
        $driver->name = 'MAX VERSTAPPEN';
        $driver->price = 45000000;
        $driver->team = $this->teams['RED BULL'];
        $this->drivers[33] = $driver;

        $driver = new Driver();
        $driver->id = 16;
        $driver->name = 'CHARLES LECLERC';
        $driver->price = 45000000;
        $driver->team = $this->teams['FERRARI'];
        $this->drivers[16] = $driver;

        $driver = new Driver();
        $driver->id = 10;
        $driver->name = 'PIERRE GASLY';
        $driver->price = 42000000;
        $driver->team = $this->teams['RED BULL'];
        $this->drivers[10] = $driver;

        $driver = new Driver();
        $driver->id = 3;
        $driver->name = 'DANIEL RICCIARDO';
        $driver->price = 35000000;
        $driver->team = $this->teams['RENAULT'];
        $this->drivers[3] = $driver;

        $driver = new Driver();
        $driver->id = 11;
        $driver->name = 'SERGIO PEREZ';
        $driver->price = 32000000;
        $driver->team = $this->teams['RACING POINT'];
        $this->drivers[11] = $driver;

        $driver = new Driver();
        $driver->id = 27;
        $driver->name = 'NICO HULKENBERG';
        $driver->price = 32000000;
        $driver->team = $this->teams['RENAULT'];
        $this->drivers[27] = $driver;

        $driver = new Driver();
        $driver->id = 20;
        $driver->name = 'KEVIN MAGNUSSEN';
        $driver->price = 28000000;
        $driver->team = $this->teams['HAAS'];
        $this->drivers[20] = $driver;

        $driver = new Driver();
        $driver->id = 8;
        $driver->name = 'ROMAIN GROSJEAN';
        $driver->price = 28000000;
        $driver->team = $this->teams['HAAS'];
        $this->drivers[8] = $driver;

        $driver = new Driver();
        $driver->id = 7;
        $driver->name = 'KIMI RAIKKONEN';
        $driver->price = 28000000;
        $driver->team = $this->teams['ALFA ROMEO'];
        $this->drivers[7] = $driver;

        $driver = new Driver();
        $driver->id = 55;
        $driver->name = 'CARLOS SAINZ JR.';
        $driver->price = 27000000;
        $driver->team = $this->teams['MCLAREN'];
        $this->drivers[55] = $driver;

        $driver = new Driver();
        $driver->id = 18;
        $driver->name = 'LANCE STROLL';
        $driver->price = 26000000;
        $driver->team = $this->teams['RACING POINT'];
        $this->drivers[18] = $driver;

        $driver = new Driver();
        $driver->id = 4;
        $driver->name = 'LANDO NORRIS';
        $driver->price = 23000000;
        $driver->team = $this->teams['MCLAREN'];
        $this->drivers[4] = $driver;

        $driver = new Driver();
        $driver->id = 26;
        $driver->name = 'DANIIL KVYAT';
        $driver->price = 22000000;
        $driver->team = $this->teams['TORO ROSSO'];
        $this->drivers[26] = $driver;

        $driver = new Driver();
        $driver->id = 99;
        $driver->name = 'ANTONIO GIOVINAZZI';
        $driver->price = 21000000;
        $driver->team = $this->teams['ALFA ROMEO'];
        $this->drivers[99] = $driver;

        $driver = new Driver();
        $driver->id = 63;
        $driver->name = 'GEORGE RUSSELL';
        $driver->price = 20000000;
        $driver->team = $this->teams['WILLIAMS'];
        $this->drivers[63] = $driver;

        $driver = new Driver();
        $driver->id = 88;
        $driver->name = 'ROBERT KUBICA';
        $driver->price = 20000000;
        $driver->team = $this->teams['WILLIAMS'];
        $this->drivers[88] = $driver;

        $driver = new Driver();
        $driver->id = 23;
        $driver->name = 'ALEXANDER ALBON';
        $driver->price = 20000000;
        $driver->team = $this->teams['TORO ROSSO'];
        $this->drivers[23] = $driver;
    }
}