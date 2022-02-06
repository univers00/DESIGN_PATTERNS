<?php

namespace App\Command;

class RemoveStarsCommand extends \App\AbstractBookCommand
{

    function execute() {
        $this->bookCommandee->setStarsOff();
    }

}