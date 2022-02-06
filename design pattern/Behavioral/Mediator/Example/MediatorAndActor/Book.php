<?php

namespace App\MediatorAndActor;

abstract class Book {

    private $mediator;

    function __construct($mediator_in)
    {
        $this->mediator = $mediator_in;
    }
    function getMediator()
    {
        return $this->mediator;
    }

    function changed($changingClassIn)
    {
        getMediator()->Change($changingClassIn);
    }
}