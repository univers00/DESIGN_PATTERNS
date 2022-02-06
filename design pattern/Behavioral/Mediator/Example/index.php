<?php
namespace App;

use App\MediatorAndActor\Author;
use App\MediatorAndActor\Title;
use App\MediatorAndActor\Book;


require_once (__DIR__."/../vendor/autoload.php");

$mediator = new Mediator("uzuki","typescript");
$author = $mediator->getAuthor();
$title = $mediator->getTitle();
$author->setAuthorUpperCase();


echo $author->getAuthor();

echo $title->getTitle();

