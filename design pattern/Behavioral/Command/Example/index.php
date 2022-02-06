<?php
namespace App;

use App\Command\AddStarsCommand;
use App\Command\RemoveStarsCommand;


require_once (__DIR__."/../vendor/autoload.php");


$book = new BookCommandee("la vie","uzu ki, univers00");
$addStars = new AddStarsCommand($book);
$addStars->execute();
echo $book->getTitle();
echo $book->getAuthor();

$removeStars = new RemoveStarsCommand($book);
$removeStars->execute();
echo $book->getTitle();
echo $book->getAuthor();