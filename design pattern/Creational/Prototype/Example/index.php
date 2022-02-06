<?php
namespace App;
require_once __DIR__.'/../vendor/autoload.php';





$ahmed = new Author("Ahmed ahmed");
$page1 = new Page(1,'hello',$ahmed,"this is first page","white",2,2);
$page1->addComment("title must be bold");
var_dump($ahmed);
echo "************************************";
$pagex = clone $page1;
var_dump($ahmed);