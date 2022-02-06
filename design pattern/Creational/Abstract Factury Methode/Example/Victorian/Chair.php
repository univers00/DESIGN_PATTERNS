<?php

namespace App\Victorian;
use App\FurnitureDesign;
class Chair implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "sofa victorian desgin .";
    }
}