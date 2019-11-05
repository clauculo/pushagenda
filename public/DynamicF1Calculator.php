<?php
namespace F1;
use F1\Graph;

class DynamicF1Calculator {

    /** @var Graph $graph */
    private $graph;

    public $calculations;

    private $bestTeam = [];

    private $currentTeamCalculation = [];

    /**
     * DynamicF1Calculator constructor.
     *
     * @param Graph $graph
     */
    public function __construct(Graph $graph)
    {
        $this->graph = $graph;
    }

    public function calculateBestTeam()
    {
        $calculations = $this->recursiveCalulation($this->graph) . "klaar";
        dump ($this->calculations);
        return $calculations;
    }

    public function recursiveCalulation(Graph $child = null, $parent = null, $team = []) {
        if ($parent) {
            $team[] = $parent;
            if ($this->isInvalidTeam($team)) {
                return;
            }
            if (count($team) == 4) {
                //dump($team);
            }
        }

        if ($child === null) {
            return;
        }

        foreach ($child->getCurrentSteps() as $node) {
            $this->calculations++;
            $this->recursiveCalulation($child->getChilds(), $node, $team);
        }

    }

    public function isInvalidTeam($team) {
        $teams = [];
        foreach ($team as $node) {
            if ($node instanceof Team) {
                if (in_array($node->name, $teams)) {

                    return true;
                }
                $teams[] = $node->name;
            }
            if ($node instanceof Driver) {
                if (in_array($node->team->name, $teams)) {
                    return true;
                }
                $teams[] = $node->team->name;
            }
        }

        return false;
    }
}