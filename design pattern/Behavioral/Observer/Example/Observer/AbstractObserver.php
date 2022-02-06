<?php

namespace App\Observer;

use App\Subject\AbstractSubject;
abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
}