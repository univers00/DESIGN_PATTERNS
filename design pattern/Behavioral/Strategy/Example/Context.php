<?php

namespace App;
use App\Strategy\ExclaimStrategy;
use App\Strategy\StarsStrategy;
use App\Strategy\UpperStrategy;

class Context
{
    private $strategy = NULL;
    //bookList is not instantiated at construct time
    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "U":
                $this->strategy = new UpperStrategy();
                break;
            case "E":
                $this->strategy = new ExclaimStrategy();
                break;
            case "S":
                $this->strategy = new StarsStrategy();
                break;
        }
    }
    public function showBookTitle($book)
    {
        return $this->strategy->showTitle($book);
    }
}