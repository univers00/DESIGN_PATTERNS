<?php

namespace App;

class Factory
{
    protected FurnitureStyleDesign $style;
    public function __construct(FurnitureStyleDesign $style)
    {
        $this->style = $style;
    }
    public function getSofa()
    {
       return $this->style->creatSofa()->designTemplate();
    }
    public function getChair()
    {
        return $this->style->creatChair()->designTemplate();
    }
    public function getCoffeTable()
    {
        return $this->style->creatCoffeTable()->designTemplate();
    }
}