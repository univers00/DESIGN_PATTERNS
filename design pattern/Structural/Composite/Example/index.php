<?php

namespace App;
use App\InputF;
use App\Form;

require_once (__DIR__."/../vendor/autoload.php");
$form1 = new Form("userinfo","user information","/home");

$input1 = new InputF("name","full Name","text");
$input2 = new InputF("age","full Name","integer");
$input3 = new InputF("address","full Name","text");

$form2 = new Form("skills","user skills","");

$form1->add($input1);
$form1->add($input2);$form1->add($form2);
$form1->add($input3);


$data = [
    "name"=>"ahmed",
    "age"=>"20",
    "address"=>"khemisset, morrocco",
];


$form1->setData($data);
echo $form1->render();
