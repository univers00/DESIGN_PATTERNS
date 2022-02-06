<?php

namespace App\Dialogs;

use App\Buttons\Button;

abstract class Dialog
{
    abstract public function creatButton():Button;
    
    public function renderButton():string
    {
        $button = $this->creatButton();

        return "
                *****************
                {$button->show()}
                *****************
                ";
    }
}