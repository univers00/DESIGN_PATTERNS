<?php

namespace App\Observer;

use App\Subject\AbstractSubject;

class ObserverFan extends AbstractObserver {
    public function __construct() {
    }
    public function update(AbstractSubject $subject)
    {
        echo '* OBSERVER - NEW ALERT in subject*'."\n";
        echo ' new favorite patterns: '.$subject->getFavorites()."\n";
        echo '*ALERT OVER*'."\n";
    }

}