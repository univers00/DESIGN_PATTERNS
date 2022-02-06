<?php

namespace App\Modern;
use App\FurnitureDesign;
class CoffeTable implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "Coffe table Modern desgin .";
    }
}