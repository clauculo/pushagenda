<?php
namespace F1;

include_once 'Competition.php';
include_once 'Graph.php';
require_once 'DynamicF1Calculator.php';
require_once '../vendor/autoload.php';

class Driver
{

    public $id;
    public $price;
    public $realPrice;
    /** @var Team */
    public $team;
    public $name;
    public $pointsWon;
    public $valueIncrease;
}

class Team
{

    public $name;
    public $enginePrice;
    public $chassisPrice;
    public $realEnginePrice;
    public $realChassisPrice;
    public $pointsWon;
    public $valueIncrease;
}


/**
 * Class RaceResult
 * @package F1
 * @SuppressWarnings("PHPMD")
 *
 */
class RaceResult
{

    public $drivers;
    public $position1;
    public $position2;
    public $position3;
    public $position4;
    public $position5;
    public $position6;
    public $position7;
    public $position8;
    public $position9;
    public $position10;
    public $position11;
    public $position12;
    public $position13;
    public $position14;
    public $position15;
    public $position16;
    public $position17;
    public $position18;
    public $position19;
    public $position20;

    public function __construct($drivers) {
        $this->drivers = $drivers;
        $this->addRaceResults();
    }

    public function addRaceResults() {

        $drivers = [];
        if (isset ($_GET['position1'])) {
            foreach ($_GET as $position => $driver) {
                if (strpos($position, 'position') === false) {
                    continue; // skip not related get params
                }
                $this->{$position} = $this->drivers[$driver];
                $drivers[$position] = $driver;
            }
            setcookie('drivers', implode(',', $drivers), time() + (86400 * 365), "/"); // 86400 = 1 day
            return;
        }

        if (isset ($_GET['thedata'])) {
            foreach (explode('&', $_GET['thedata']) as $position => $driver) {
                $this->{'position' . ($position + 1)} = $this->drivers[preg_replace('/.*=/', '', $driver)];
                $drivers[$position + 1] = preg_replace('/.*=/', '', $driver);
            }
            setcookie('drivers', implode(',', $drivers), time() + (86400 * 365), "/"); // 86400 = 1 day
            return;
        }

        if (isset ($_COOKIE['drivers'])) {
            foreach (explode(',', $_COOKIE['drivers']) as $position => $driver) {
                $this->{'position' . ($position + 1)} = $this->drivers[$driver];
            }
            return;
        }

        $result = [
            $this->drivers[44], // MERCEDES
            $this->drivers[5], // FERRARI
            $this->drivers[77], // MERCEDES
            $this->drivers[33], // Red-bull
            $this->drivers[16], // FERRARI
            $this->drivers[10], // Red-bull
            $this->drivers[3], // FERRARI
            $this->drivers[11], // RACING POINT
            $this->drivers[27], // RENAULT
            $this->drivers[20], // HAAS
            $this->drivers[8], // HAAS
            $this->drivers[7], // ALFA ROMEO
            $this->drivers[55], // MCLAREN
            $this->drivers[18], // RACING POINT
            $this->drivers[4], // MCLAREN
            $this->drivers[26], // TORO ROSSO
            $this->drivers[99], // ALFA ROMEO
            $this->drivers[63], // WILLIAMS
            $this->drivers[88], // WILLIAMS
            $this->drivers[23], // TORO ROSSO
        ];
        foreach ($result as $position => $driver) {
            $this->{'position' . ($position + 1)} = $driver;
        }
    }
}

/**
 * Class PointPerRaceCoureur
 * @package F1
 * @SuppressWarnings("PHPMD")
 */
class PointPerRaceCoureur
{

    public $position1 = 30 + 80;
    public $position1_qualify = 30;
    public $position2 = 26 + 70;
    public $position2_qualify = 26;
    public $position3 = 22 + 60;
    public $position3_qualify = 22;
    public $position4 = 18 + 50;
    public $position4__qualify = 18;
    public $position5 = 16 + 45;
    public $position5_qualify = 16;
    public $position6 = 14 + 40;
    public $position6_qualify = 14;
    public $position7 = 12 + 35;
    public $position7_qualify = 12;
    public $position8 = 11 + 30;
    public $position8_qualify = 11;
    public $position9 = 10 + 27;
    public $position9_qualify = 10;
    public $position10 = 9 + 24;
    public $position10_qualify = 9;
    public $position11 = 8 + 21;
    public $position11_qualify = 8;
    public $position12 = 7 + 18;
    public $position12_qualify = 7;
    public $position13 = 6 + 15;
    public $position13_qualify = 6;
    public $position14 = 5 + 12;
    public $position14_qualify = 5;
    public $position15 = 4 + 10;
    public $position15_qualify = 4;
    public $position16 = 3 + 8;
    public $position16_qualify = 3;
    public $position17 = 2 + 6;
    public $position17_qualify = 2;
    public $position18 = 1 + 4;
    public $position18_qualify = 1;
    public $position19 = 0 + 2;
    public $position19_qualify = 0;
    public $position20 = 0 + 0;
}

/**
 * Class PointPerTeam
 * @package F1
 *
 * @SuppressWarnings("PHPMD")
 */
class PointPerTeam
{
    public $position1 = 15 + 40;
    public $position1_qualify = 15;
    public $position2 = 12 + 35;
    public $position2_qualify = 12;
    public $position3 = 10 + 30;
    public $position3_qualify = 10;
    public $position4 = 9 + 24;
    public $position4_qualify = 9;
    public $position5 = 8 + 22;
    public $position5_qualify = 8;
    public $position6 = 7 + 20;
    public $position6_qualify = 7;
    public $position7 = 6 + 18;
    public $position7_qualify = 6;
    public $position8 = 6 + 16;
    public $position8_qualify = 6;
    public $position9 = 5 + 14;
    public $position9_qualify = 5;
    public $position10 = 5 + 12;
    public $position10_qualify = 5;
    public $position11 = 4 + 10;
    public $position11_qualify = 4;
    public $position12 = 4 + 9;
    public $position12_qualify = 4;
    public $position13 = 3 + 8;
    public $position13_qualify = 3;
    public $position14 = 3 + 7;
    public $position14_qualify = 3;
    public $position15 = 2 + 6;
    public $position15_qualify = 2;
    public $position16 = 2 + 4;
    public $position16_qualify = 2;
    public $position17 = 1 + 3;
    public $position17_qualify = 1;
    public $position18 = 1 + 2;
    public $position18_qualify = 1;
    public $position19 = 0 + 1;
    public $position19_qualify = 0;
    public $position20 = 0 + 0;
    public $position20_qualify = 0;
}

class F1Calculator
{

    /** @var Driver[] $drivers */
    public $drivers;
    public $pointPerTeam;
    public $pointPerRaceCoureur;
    public $raceResult;

    private $teams;
    private $myTeamPrice;

    public function __construct(
        $drivers,
        PointPerTeam $pointPerTeam,
        PointPerRaceCoureur $pointPerRaceCoureur,
        RaceResult $raceResult
    ) {
        $this->drivers = $drivers;
        $this->pointPerTeam = $pointPerTeam;
        $this->pointPerRaceCoureur = $pointPerRaceCoureur;
        $this->raceResult = $raceResult;

        $this->loadCookies();
    }

    /**
     * Method to load cookies ;)
     */
    private function loadCookies() {
        if (isset ($_COOKIE['team1']) && !isset($_GET['team1'])) {
            $_GET['team1'] = $_COOKIE['team1'];
            $_GET['team2'] = $_COOKIE['team2'];
            $_GET['driver1'] = $_COOKIE['driver1'];
            $_GET['driver2'] = $_COOKIE['driver2'];
        }
        if (!isset($_GET['dnf'])) {
            $_GET['dnf'] = 0;
        }
        if (isset($_COOKIE['budget']) && !isset($_GET['budget'])) {
            $_GET['budget'] = $_COOKIE['budget'];
        }
        if (isset ($_GET['budget'])) {
            if ($_GET['budget'] > 1000000) {
                $_GET['budget'] /= 1000000;
            }
            setcookie('budget', $_GET['budget'], time() + (86400 * 365), "/"); // 86400 = 1 day
        } else {
            if (isset ($_COOKIE['budget'])) {
                if ($_COOKIE['budget'] > 1000000) {
                    $_GET['budget'] = $_COOKIE['budget'] / 1000000;
                } else {
                    $_GET['budget'] = $_COOKIE['budget'] / 1000000;
                }
            } else {
                $_GET['budget'] = 100;
            }
        }
    }

    /**
     * @return Team[]
     */
    public function getTeams() {
        if (!empty($this->teams)) {
            return $this->teams;
        }
        /** @var Team[] $teams */
        $teams = [];
        foreach ($this->drivers as $driver) {
            $teams[] = $driver->team;
        }
        $this->teams = $teams;
        return $teams;
    }

    /**
     * Add Points per team & Coureur
     */
    public function addPoints() {
        for ($i = 1; $i <= 20; $i++) {
            $coureur = $this->calcPointsPerCoureur($i);
            $team = $this->calcPointsPerTeam($i);
            /** @var Driver $driver */
            $driver = $this->raceResult->{'position' . $i};

            $this->drivers[$driver->id]->pointsWon = $coureur;
            $this->drivers[$driver->id]->valueIncrease = $this->calculateNewValueDriver($coureur);

            if (!$this->drivers[$driver->id]->team->pointsWon) {
                $this->drivers[$driver->id]->team->pointsWon += $team;
            } else {
                $this->drivers[$driver->id]->team->pointsWon += $team;

                // Sum team points for both drivers
                $teamPoints = $this->drivers[$driver->id]->team->pointsWon;
                $this->drivers[$driver->id]->team->valueIncrease = $this->calculateNewValueTeam($teamPoints);
            }
        }
    }

    /**
     * @param Driver[] $drivers
     *
     * @return Driver[]
     */
    private function calculateTeamCosts ($drivers) {
        if (isset ($_GET['team1'])) {
            setcookie('team1', $_GET['team1'], time() + (86400 * 365), "/"); // 86400 = 1 day
            setcookie('team2', $_GET['team2'], time() + (86400 * 365), "/"); // 86400 = 1 day
            setcookie('driver1', $_GET['driver1'], time() + (86400 * 365), "/"); // 86400 = 1 day
            setcookie('driver2', $_GET['driver2'], time() + (86400 * 365), "/"); // 86400 = 1 day

            $team1Found = false;
            $team2Found = false;
            foreach ($drivers as &$driver) {
                $driver->realPrice = $driver->price;
                if (empty($driver->team->realChassisPrice)) {
                    $driver->team->realChassisPrice = $driver->team->chassisPrice;
                }
                if (empty($driver->team->realEnginePrice)) {
                    $driver->team->realEnginePrice = $driver->team->enginePrice;
                }

                if (!$team1Found && $_GET['team1'] == $driver->team->name) {
                    $this->myTeamPrice += $driver->team->enginePrice * 0.9;
                    $driver->team->enginePrice *= 0.9;
                    $team1Found = true;
                }
                if (!$team2Found && $_GET['team2'] == $driver->team->name) {
                    $this->myTeamPrice += $driver->team->chassisPrice * 0.9;
                    $driver->team->chassisPrice *= 0.9;
                    $team2Found = true;
                }
                if ($_GET['driver1'] == $driver->id) {
                    $this->myTeamPrice += $driver->price * 0.9;
                    $driver->price *= 0.9;
                }
                if ($_GET['driver2'] == $driver->id) {
                    $this->myTeamPrice += $driver->price * 0.9;
                    $driver->price *= 0.9;
                }
            }
        }


        return $drivers;
    }

    /**
     * @param integer $points
     *
     * @return integer
     */
    public function calculateSalaris ($points) {
        $salaris = 0;
        if ($points <= 100) {
            return ($points * 60000) / 1000000;
        }
        $points -= 100;
        $salaris += 100 * 60000;

        if ($points <= 100) {
            return ($salaris + $points * 40000) / 1000000;
        }
        $points -= 100;
        $salaris += 100 * 40000;

        return ($salaris + $points * 20000) / 1000000;
    }

    /**
     * Calculate the new value for team price (DRIVERS)
     *
     * @param integer $points
     *
     * @return int
     */
    public function calculateNewValueDriver($points) {
        if ($points < -11) {
            return -2000000;
        }
        if ($points >= -10 && $points <= 14) {
            return -1000000;
        }
        if ($points >= 15 && $points <= 35) {
            return 0;
        }
        if ($points >= 36 && $points <= 55) {
            return 1000000;
        }
        if ($points >= 56 && $points <= 75) {
            return 2000000;
        }
        if ($points >= 76 && $points <= 95) {
            return 4000000;
        }
        if ($points >= 96 && $points <= 119) {
            return 4000000;
        }
        if ($points >= 120) {
            return 5000000;
        }
    }

    /**
     * Calculate the new value for team price (TEAM)
     *
     * @param integer $points
     *
     * @return int
     */
    public function calculateNewValueTeam($points) {
        if ($points < -11) {
            return -2000000;
        }
        if ($points >= -10 && $points <= 14) {
            return -1000000;
        }
        if ($points >= 15 && $points <= 35) {
            return 0;
        }
        if ($points >= 36 && $points <= 55) {
            return 0;
        }
        if ($points >= 56 && $points <= 75) {
            return 0;
        }
        if ($points >= 76 && $points <= 95) {
            return 1000000;
        }
        if ($points >= 96 && $points <= 119) {
            return 2000000;
        }
        if ($points >= 120) {
            return 2000000;
        }
    }

    /**
     * @return array
     */
    public function getTeamSuggestion() {
        $this->drivers = $this->calculateTeamCosts($this->drivers);

        // Total team-worth:
        //  var_dump ($this->myTeamPrice/0.9);

        $arrSuggestions = [];
        $indexes = [];
        foreach ($this->drivers as $driver) {
            $driverPick = $driver;
            $driverPrice = $driver->price;
            foreach ($this->drivers as $secondDriver) {
                if ($secondDriver == $driverPick || $secondDriver->team == $driverPick->team) {
                    continue;
                }
                if ($driverPrice + $secondDriver->price > $this->getBudget()) {
                    continue;
                }
                $secondDriverPick = $secondDriver;
                $secondDriverPrice = $secondDriver->price;
                foreach ($this->getTeams() as $team) {
                    if ($secondDriver->team == $team || $driverPick->team == $team) {
                        continue;
                    }
                    if ($driverPrice + $secondDriverPrice + $team->enginePrice > $this->getBudget()) {
                        continue;
                    }
                    $enginePick = $team;
                    $enginePrice = $team->enginePrice;

                    foreach ($this->getTeams() as $chassisTeam) {
                        if ($secondDriver->team == $chassisTeam || $driverPick->team == $chassisTeam || $enginePick == $chassisTeam) {
                            continue;
                        }
                        $chassisPick = $chassisTeam;
                        $chassisPrice = $chassisTeam->chassisPrice;

                        $totalPrice = $driverPrice + $secondDriverPrice + $enginePrice + $chassisPrice;
                        if ($totalPrice > $this->getBudget()) {
                            continue;
                        }

                        $index = [$driverPick->name,$secondDriverPick->name, $enginePick->name, $chassisPick->name];
                        sort ($index);
                        if (in_array(implode('', $index), $indexes)) {
                            continue;
                        }
                        $indexes[] = implode('', $index);

                        $points = (
                            $driverPick->pointsWon + $secondDriverPick->pointsWon +
                            $enginePick->pointsWon + $chassisPick->pointsWon
                        );

                        $realPrice = [
                            $driverPick->realPrice,
                            $secondDriverPick->realPrice,
                            $enginePick->realEnginePrice,
                            $chassisPick->realChassisPrice
                        ];

                        $moneyLost = 0;

                        if ($_GET['driver1'] !== '0') {
                            if ($_GET['driver1'] != $driverPick->id && $_GET['driver2'] != $driverPick->id) {
                                $moneyLost += (new Competition())->drivers[$_GET['driver1']]->price * 0.1;
                            }
                            if ($_GET['driver1'] != $secondDriverPick->id && $_GET['driver2'] != $secondDriverPick->id) {
                                $moneyLost += (new Competition())->drivers[$_GET['driver2']]->price * 0.1;
                            }
                            if ($_GET['team1'] != $enginePick->name && $_GET['team2'] != $enginePick->name) {
                                $moneyLost += (new Competition())->teams[$_GET['team1']]->enginePrice * 0.1;
                            }
                            if ($_GET['team1'] != $chassisPick->name && $_GET['team2'] != $chassisPick->name) {
                                $moneyLost += (new Competition())->teams[$_GET['team2']]->enginePrice * 0.1;
                            }
                        }

                        $mybudget = ($_GET['budget'] * 1000000) + ($this->myTeamPrice / 0.9);

                        $arrSuggestions[] = [
                            'coureur_1' => $driverPick->name,
                            'coureur_2' => $secondDriverPick->name,
                            'driver1' => $driverPick,
                            'driver2' => $secondDriverPick,
                            'motorobj' => $enginePick,
                            'chassisobj' => $chassisPick,
                            'motor' => $enginePick->name,
                            'chassis' => $chassisPick->name,
                            'points' => $points,
                            'price' => (array_sum($realPrice) / 1000000),
                            'salaris' => $this->calculateSalaris($points),
                            'transfer' => $moneyLost / 1000000,
                            'budget' => (($mybudget - $moneyLost) - array_sum($realPrice)) / 1000000,
                            'index' => implode(' + ', $index),
                        ];
                    }
                }
            }
        }
        return $arrSuggestions;
    }

    /**
     * @return int
     */
    private function getBudget() {
        if (isset ($_GET['budget'])) {
            return ($_GET['budget'] * 1000000) + $this->myTeamPrice;
        }
        return 1000000;
    }

    /**
     * @param integer $i
     *
     * @return integer
     */
    private function calcPointsPerCoureur($i) {
        if ($i > (20 - $_GET['dnf'])) {
            return $this->pointPerRaceCoureur->{'position' . $i . '_qualify'} - 6;
        }

        return $this->pointPerRaceCoureur->{'position' . $i};
    }

    /**
     * @param integer $i
     *
     * @return mixed
     */
    private function calcPointsPerTeam($i) {
        if ($i > (20 - $_GET['dnf'])) {
            return $this->pointPerTeam->{'position' . $i . '_qualify'} - 3;
        }

        return $this->pointPerTeam->{'position' . $i};
    }
}


$drivers = (new Competition())->drivers;
$teams2 = new Graph((new Competition())->teams);
$teams1 = new Graph((new Competition())->teams);
$teams1->addChilds($teams2);

$drivers2 = new Graph($drivers);
$drivers2->addChilds($teams1);

$graph = new Graph($drivers);
$graph->addChilds($drivers2);

//$dynamicCalculator = (new DynamicF1Calculator($graph));
//print $dynamicCalculator->calculateBestTeam();
//
//
//exit();

$calculator = new F1Calculator(
    $drivers,
    new PointPerTeam(),
    new PointPerRaceCoureur(),
    new RaceResult($drivers)
);
$calculator->addPoints();



if (isset($_GET['driver1'])) {
    $suggestions = $calculator->getTeamSuggestion();

    usort($suggestions, function ($a, $b) {
        return $a['points'] <=> $b['points'];
    });

    krsort($suggestions);

    // Only pick the first 500
    $suggestions = \array_slice($suggestions, 0, 500);

    if (isset ($_GET['thedata'])) {
        $sortedList = [];
        foreach (explode('&', $_GET['thedata']) as $position => $driver) {
            $sortedList[] = $drivers[preg_replace('/.*=/', '', $driver)];
        }
        $drivers = $sortedList;
    } else {
        if (isset ($_COOKIE['drivers'])) {
            $sortedList = [];
            foreach (explode(',', $_COOKIE['drivers']) as $position => $driver) {
                $sortedList[] = $drivers[$driver];
            }
            $drivers = $sortedList;
        }
    }
}

/**
 * @param string $name
 * @param array $drivers
 */
function getDriver($name, $drivers) {
    print "<select name='$name' class=\"form-control\">";
    $position = 0;
    print "<option value='0'>Geen keuze</option>";
    foreach ($drivers as $driver) {
        $position++;
        if (strstr($name, 'driver') && isset ($_GET['driver1'])){
            $selected = $_GET[$name] == $driver->id ? ' selected=selected' : '';
        } else {
            $selected = $position == preg_replace('/\D/', '', $name) ? ' selected=selected' : '';
        }

        print "<option value='$driver->id' " . $selected . '>' .
            $driver->name . ' (' . $driver->team->name . ')</option>';
    }
    print "</select>";
}
/**
 * @param string $name
 * @param array $drivers
 */
function getDriverForList($name, $drivers) {
    print "<select name='$name' class='driver-list'>";
    $position = 0;
    foreach ($drivers as $driver) {
        $position++;
        if (strstr($name, 'position') && isset ($_GET['position1'])){
            $selected = $_GET[$name] == $driver->id ? ' selected=selected' : '';
        } else {
            $selected = $position == preg_replace('/\D/', '', $name) ? ' selected=selected' : '';
        }
        $dnf = $position > (20 - $_GET['dnf']) ? " dnf" : "";

        print "<option value='$driver->id' " . $selected . '>' . $dnf . ' ' .
            $driver->name . ' (' . $driver->team->name . ')</option>';
    }
    print "</select><br>";
}
/**
 * @param string $name
 * @param array $drivers
 */
function getTeam($name, $drivers) {
    $teams = [];
    foreach ($drivers as $driver) {
        $teams[] = $driver->team->name;
    }
    print "<select name='$name' class=\"form-control\">";
    $teams = array_keys(array_flip($teams));
    print "<option value='0'>Geen keuze</option>";
    foreach ($teams as $team) {
        if (isset ($_GET['team1'])) {
            $selected = $_GET[$name] == $team ? ' selected=selected' : '';
        }
        print "<option $selected>$team</option>";
    }
    print "</select>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F1 Pool Kaartje2go Calculator</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
        #sortable li {
            margin: 0 3px 1px 3px; padding-top: 3px; padding-left: 1.5em; font-size: 0.8em; height: 20px; background-color: #444;
            font-family: 'Cutive Mono', monospace; color:white; white-space: nowrap;
        }
        #sortable li #driver-name { color:white}
        #sortable li #driver-team { color:lemonchiffon; font-size:smaller;}
        #idees {
            float:left; width:70px;height:415px;margin:0px 0px 0px -20px;font-family: 'Cutive Mono', monospace;color:red;
        }
        .form-group { margin:0px 10px; max-width: 500px}
        #idees ol { list-style-type: none; text-align: left;}
        #idees ol li {margin: 0 3px 1px 3px; padding-top:3px; font-size: 0.8em; height:20px;}
        #head {width:100%; height: 40px;padding-left:10px;font-family: 'Suez One', serif;font-size:20px}
        .row-striped:nth-of-type(odd){
            background-color: #efefef;
        }

        .row-striped:nth-of-type(even){
            background-color: #ffffff;
        }
        .row-striped+ .ownteam { background-color:#ffee80 !important; }
        .red {
            color: darkred;
        }
        .green {
            color: darkgreen;
        }
        .bonusvalue {color:#999; font-size:11px;}
        .bonusvalue i {font-size:10px;}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>
<div id="head"><img src="https://static-s.aa-cdn.net/img/gp/20600002092954/96VoSjPr209RLlJ9iLtjGexT_ZLw-0-DZtfd1Xo7Cobc6-mX7gg9XCfti-cye_MvuOM=s300?v=1" height="40"> Kaartje2go Calculator <b>2019</b></div>
<form method="GET" action="f1.php" class="hidden-xs">
    <input type='hidden' name='thedata' id='thedata'>
    <div class="row">
        <div class="col-sm-6">
            <div id="idees">
                <ol class="">
                    <?php
                    for ($i = 1; $i <= 20; $i++) {
                        print "<li>$i</li>";
                    } ?>
                </ol>
            </div>
            <div id="ballot" class="center hidden-xs">
                <ol id="sortable" class="rankings">
                    <?php
                    $y = 0;
                    foreach ($drivers as $driver) {
                        $y++;
                        $dnf = $y > (20 - $_GET['dnf']) ? " DNF" : "";
                        print  "<li id='position_$driver->id' class='ranking'><span id='driver-name'>" . $driver->name . " </span>
                    <span id='driver-team'>" . $driver->team->name . "</span>&nbsp;" . ($driver->price / 1000000) . "M " . $dnf;
                    }
                    ?>
                </ol>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="mybudget">Budget</label> (In Millions)
                <input id="mybudget" onkeydown="this.value = this.value.replace(/\,/g, '.');" class="form-control" type="text" name="budget" value="<?=$_GET['budget']?>">
                <label for="driver1">Coureur 1</label><?php getDriver('driver1', $drivers); ?>
                <label for="driver2">Coureur 2</label><?php getDriver('driver2', $drivers); ?>
                <label for="team1">Chassis</label> <?php getTeam('team1', $drivers); ?>
                <label for="team2">Motor</label> <?php getTeam('team2', $drivers); ?>
                <label for="DNFamount">DNF aantal</label><input id="DNFamount" class="form-control" type="text" name="dnf" value="<?=$_GET['dnf']?>"><br>
                <button type='submit' class="btn btn-primary">Verstuur</button>
            </div>
        </div>
    </div>
</form>
<script>
    $( "#sortable" ).sortable({ axis: "y", containment: "#ballot", scroll: false });
    $( "#sortable" ).disableSelection();

    $('form').submit(function(){
        $('#thedata').val($( "#sortable" ).sortable("serialize"));
        location.href='f1.php';
        return true;
    });

    // $(document).ready( function () {
    //     $('#myTable').DataTable({
    //         "order": [[4, "desc"]],
    //     });
    // } );
    $(document).ready(function() {
        console.log("<?php print (new Competition())->getAllTeamPrices(); ?>");
        $('#myTable').DataTable( {
            "aoColumns": [
                null,
                null,
                null,
                null,
                { "orderSequence": [ "desc", "asc" ] },
                { "orderSequence": [ "desc", "asc" ] },
                { "orderSequence": [ "desc", "asc" ] },
                { "orderSequence": [ "desc", "asc" ] },
                { "orderSequence": [ "desc", "asc" ] },
                { "orderSequence": [ "asc", "desc" ] },
                { "orderSequence": [ "desc", "asc" ] }
            ],
            "order": [[4, "desc"]]
        } );
    } );
</script>
<?php

print "<form method='get' action='f1.php' class=\"visible-xs\">";
for ($i = 1; $i <= 20; $i++) {
    getDriverForList('position' . $i, $drivers);
}
?>
<div class="form-group">
    <label for="mybudget">Budget</label> (In Millions)
    <input class="form-control" type="text" onkeydown="this.value.replace(/\./g, ',');"  id="mybudget" name="budget" value="<?=$_GET['budget']?>">
    <label for="driver1">Coureur 1</label><?php getDriver('driver1', $drivers); ?>
    <label for="driver2">Coureur 2</label><?php getDriver('driver2', $drivers); ?>
    <label for="team1">Chassis</label> <?php getTeam('team1', $drivers); ?>
    <label for="team2">Motor</label> <?php getTeam('team2', $drivers); ?>
    <label for="DNFamount">DNF aantal</label><input id="DNFamount" class="form-control" type="text" name="dnf" value="<?=$_GET['dnf']?>">
    <br><input type="submit" value="Verstuur" class="btn btn-primary">
</div>
</form>
<?php
if (empty($suggestions)) {
    print 'Sorry.... Je kunt helemaal niets kopen!!!<br>';
    print "<img src='https://media.giphy.com/media/l2JhrYYxAD6N5gble/giphy.gif' />";
    exit();
}

print "<br>
<table class='table table-sm table-hover' id='myTable'>"; ?>
<thead>
<tr class="row-striped header">
    <th class="col-md-1 col-sm-6 col-xs-12">Coureur 1</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Coureur 2</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Motor</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Chassis</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Increase</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Punt.</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Salaris</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Team prijs</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Som</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Transfer</th>
    <th class="col-md-1 col-sm-6 col-xs-12">Budget</th>
    <!--    <th class="col-md-1 col-sm-6 col-xs-12">Budget</th>-->
    <!--<th class="col-md-6 col-sm-6 col-xs-12">Index</th>-->
</tr>
</thead>
<?php
/**
 * @param integer $newValueBonus
 *
 * @return string
 */
function getValueBonus($newValueBonus): string {
    if (abs($newValueBonus) >= 1000000) {
        $newValueBonus /= 1000000;
    }
    $newValueBonusText = '';
    if ($newValueBonus != 0) {
        $newValueBonusText = '<i class="glyphicon glyphicon-arrow-up green"></i>' . $newValueBonus . 'M';
        if ($newValueBonus < 0) {
            $newValueBonusText = '<i class="glyphicon glyphicon-arrow-down red"></i>' . $newValueBonus . 'M';
        }
    }
    return '<span class="bonusvalue">' . $newValueBonusText . "</span>";
}
/**
 * @param integer $newValueBonus
 *
 * @return integer
 */
function getIncrease($newValueBonus): string {
    if ($newValueBonus <= 0) {
        return 0;
    }
    if (abs($newValueBonus) >= 1000000) {
        $newValueBonus /= 1000000;
    }
    return $newValueBonus;
}

foreach ($suggestions as $row) {

    if ($_GET['driver1'] !== '0') {
        $team = [
            (new Competition())->drivers[$_GET['driver1']]->name,
            (new Competition())->drivers[$_GET['driver2']]->name,
            $_GET['team1'],
            $_GET['team2']
        ];
        sort($team);
    } else {
        $team = [''];
    }

    $ownTeam = '';
    if (implode(' + ', $team) === $row['index']) {
        $ownTeam = "ownteam";
    }

    $sumnewValueBonus = (
            $row['driver1']->valueIncrease +
            $row['driver2']->valueIncrease +
            $row['motorobj']->valueIncrease +
            $row['chassisobj']->valueIncrease
        ) / 1000000;

    $row['increase'] = $row['salaris'] +
        getIncrease($row['driver1']->valueIncrease) +
        getIncrease($row['driver2']->valueIncrease) +
        getIncrease($row['motorobj']->valueIncrease) +
        getIncrease($row['chassisobj']->valueIncrease);

    $sumValueBonusText = getValueBonus($sumnewValueBonus);
    ?>
    <tr class="row-striped <?=$ownTeam?>">
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['coureur_1'] . getValueBonus($row['driver1']->valueIncrease)?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['coureur_2']. getValueBonus($row['driver2']->valueIncrease)?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['motor']. getValueBonus($row['motorobj']->valueIncrease)?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['chassis']. getValueBonus($row['chassisobj']->valueIncrease)?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['increase']?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['points']?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['salaris']?></td>
        <td class="col-md-1 col-sm-6 col-xs-12">
            <?=$row['price'] + $sumnewValueBonus?><?=$sumValueBonusText?>
        </td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['salaris'] + $row['price'] + $sumnewValueBonus?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['transfer']?></td>
        <td class="col-md-1 col-sm-6 col-xs-12"><?=$row['budget']?></td>
        <!--            <td class="col-md-1 col-sm-6 col-xs-12">--><?//=$row['+/-']?><!--</td>-->
        <!--            <td class="col-md-6 col-sm-6 col-xs-12">--><?//=$row['index']?><!--</td>-->
    </tr>
    <?php
}
print "</table>";
?>
<script type="text/javascript">
    (function () {
        var previous;

        $(".driver-list").on('focus', function () {
            previous = this.value;
        }).change(function() {
            newDriver = this.value;
            newDriverField = this.name;

            $(".driver-list").each(function(index, val) {
                if (this.options[this.options['selectedIndex']].value == newDriver) {
                    if (this.name == newDriverField) {
                        return true; // skip this field
                    }
                    $("select[name='" + this.name + "']").val(previous);
                }
            });

            // Make sure the previous value is updated
            previous = this.value;
        });
    })();
</script>
</body>
