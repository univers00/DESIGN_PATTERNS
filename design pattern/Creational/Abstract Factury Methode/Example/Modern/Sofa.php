<?php

namespace App\Modern;
use App\FurnitureDesign;
class Sofa implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "sofa Modern desgin .";
    }
}