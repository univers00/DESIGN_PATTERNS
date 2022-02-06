<?php

namespace App\ArtDeco;
use App\FurnitureDesign;
class Sofa implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "sofa Art deco desgin .";
    }
}