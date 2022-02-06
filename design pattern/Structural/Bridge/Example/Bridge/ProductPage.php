<?php

namespace App\Bridge;

use App\Product\Product;
use App\Render\Render;

class ProductPage extends Page
{
protected Product $product;


public function __construct(Render $render, $product)
{
    parent::__construct($render);
    $this->product = $product;
}

public function view():string
{
    return $this->render->renderParts([
        $this->render->renderHeader(),
        $this->render->renderTitle($this->product->getTitle()." =>price **".$this->product->getPrice()."**"),
        $this->render->renderTextBlock($this->product->getDescription()),
        $this->render->renderImage($this->product->getImage()),
        $this->render->renderLink("Add/".$this->product->getId(),$this->product->getTitle()),
        $this->render->renderFooter(),
    ]);
}
}