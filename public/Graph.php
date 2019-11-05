<?php
namespace F1;

class Graph {

    private $currentSteps = [];
    private $childs;

    public function __construct($currentSteps)
    {
        $this->currentSteps = $currentSteps;
    }

    public function addChilds(Graph $graph)
    {
        $this->childs = $graph;
    }

    public function getCurrentSteps()
    {
        return $this->currentSteps;
    }

    public function getChilds()
    {
        return $this->childs;
    }
}
