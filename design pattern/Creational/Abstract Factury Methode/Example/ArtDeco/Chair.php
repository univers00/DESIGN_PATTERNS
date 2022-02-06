<?php

namespace App\ArtDeco;
use App\FurnitureDesign;
class chair implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "Chair Art deco desgin .";
    }
}