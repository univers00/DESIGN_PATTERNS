<?php

namespace App\Command;

class AddStarsCommand extends \App\AbstractBookCommand
{

    function execute()
    {
        $this->bookCommandee->setStarsOn();
    }

}