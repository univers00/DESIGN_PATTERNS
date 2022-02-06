<?php
namespace App;


use App\Bridge\ProductPage;
use App\Bridge\SimplePage;
use App\Product\Product;
use App\Render\HtmlRender;
use App\Render\JsonRender;

require_once __DIR__.'/../vendor/autoload.php';


$product1 = new Product("Electro","KeyBord","profile 1, prodile 2, prodile 3,prodile 4","inmage.jpg","12.50");

$product1Page = new ProductPage(new HtmlRender(),$product1);

var_dump($product1Page->view());

ECHO "**************";

$simple1Page = new SimplePage(new JsonRender(),"CPU","3.9 GHZ");
var_dump($simple1Page->view());
