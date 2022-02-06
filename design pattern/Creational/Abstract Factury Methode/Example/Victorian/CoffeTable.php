<?php

namespace App\Victorian;
use App\FurnitureDesign;
class CoffeTable implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "Coffe table victorian desgin .";
    }
}