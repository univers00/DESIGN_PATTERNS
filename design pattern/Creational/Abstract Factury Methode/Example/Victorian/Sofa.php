<?php

namespace App\Victorian;
use App\FurnitureDesign;
class Sofa implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "sofa victorian desgin .";
    }
}