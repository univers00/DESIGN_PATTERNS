<?php

namespace App\State;

class StateStars implements BookStateInterface
{
    /*
        state stars execute two time (and the object will be died) before exclaim state execute;

 */

    private $titleCount = 0;
    public function showTitle($context_in) {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;
        if (1 < $this->titleCount) {
            $context_in->setTitleState(new StateExclaim());
        }
        return Str_replace(' ','*',$title);
    }
}