<?php

namespace App\Subject;
use App\Observer\AbstractObserver;

abstract class AbstractSubject
{
    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);
    abstract function notify();


}