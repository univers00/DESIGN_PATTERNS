<?php
namespace App;

use App\Information\Book;
use App\Information\BookList;


require_once (__DIR__."/../vendor/autoload.php");

$bookList = new BookList();
$inBook1 = new Book('PHP','ahmed');
$inBook2 = new Book('MySQL','leila');
$inBook3 = new Book('Java','leila');
$inBook4 = new Book('SQL','leila');
$inBook5 = new Book('TYPE','leila');

echo $bookList->addBook($inBook1);
echo $bookList->addBook($inBook2);
echo $bookList->addBook($inBook3);
echo $bookList->addBook($inBook4);
echo $bookList->addBook($inBook5);

$interpreter = new Interpreter($bookList);
echo $interpreter->interpreter("book tile 1");

