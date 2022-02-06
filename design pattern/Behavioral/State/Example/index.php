<?php
namespace App;



require_once (__DIR__."/../vendor/autoload.php");

    /*

    object
         $variable;
                        state1 = object if $variable < 100
                        state1 = object if $variable > 100 and < 200
                        state1 = object if $variable > 200

     */

$book = new Book('PHP and Design Pattern','Larry Truett');
$context = new bookContext($book);

/*
        state stars execute two time before exclaim state execute;

 */
echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";

echo $context->getBookTitle()."\n";