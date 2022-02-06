<?php

namespace App\ArtDeco;
use App\FurnitureDesign;
class CoffeTable implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "Coffe table Art deco desgin .";
    }
}