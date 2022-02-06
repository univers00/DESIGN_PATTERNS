<?php
namespace App;

use App\Observer\ObserverFan;
use App\Subject\Subject;

require_once (__DIR__."/../vendor/autoload.php");

/*
    Subject => attach(Observers)
            if subject update will notify Observers attach


            observer = ahmed
                       leila
                       omar

 */
$observer1 = new ObserverFan();
$observer2 = new ObserverFan();
$observer3 = new ObserverFan();
$observer4 = new ObserverFan();
$subj = new Subject();
$subj->attach($observer1);
$subj->attach($observer2);
$subj->attach($observer3);
$subj->attach($observer4);
$subj->updateFavorites("Singelton, Builder");
