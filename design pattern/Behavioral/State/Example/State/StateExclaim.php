<?php

namespace App\State;

class StateExclaim implements BookStateInterface
{
    private $titleCount = 0;
    public function showTitle($context_in) {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;
        $context_in->setTitleState(new StateStars());
        return Str_replace(' ','!',$title);
    }
}