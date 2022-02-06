<?php

namespace App\Modern;
use App\FurnitureDesign;
class chair implements FurnitureDesign
{
    public function designTemplate(): string
    {
        return "sofa Modern desgin .";
    }
}