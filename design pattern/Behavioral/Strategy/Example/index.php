<?php
namespace App;

require_once (__DIR__."/../vendor/autoload.php");


$book = new Book(" type Script ","uzuki");

$strategy1  = new Context("S");
echo $strategy1->showBookTitle($book)."\n";


$strategy1  = new Context("E");
echo $strategy1->showBookTitle($book)."\n";



$strategy1  = new Context("U");
echo $strategy1->showBookTitle($book)."\n";