<?php

namespace App;

abstract class AbstractBookCommand
 {
    protected $bookCommandee;

    function __construct($bookCommandee_in) {
        $this->bookCommandee = $bookCommandee_in;
    }

    abstract function execute();
}