<?php
namespace App;

require_once (__DIR__."/../vendor/autoload.php");

$book1 = new Book("Dr House",'me');

$reverse = FacadeCaseReverse::reverseCase($book1->getTitle());
echo $reverse;