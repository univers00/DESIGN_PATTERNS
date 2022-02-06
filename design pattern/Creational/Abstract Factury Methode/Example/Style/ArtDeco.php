<?php

namespace App\Style;

use App\ArtDeco\Chair;
use App\ArtDeco\CoffeTable;
use App\ArtDeco\Sofa;
use App\FurnitureDesign;
use App\FurnitureStyleDesign;

class ArtDeco implements FurnitureStyleDesign
{


    public function creatSofa(): FurnitureDesign
    {
       return new Sofa();
    }

    public function creatChair(): FurnitureDesign
    {
      return new Chair();
    }

    public function creatCoffeTable(): FurnitureDesign
    {
        return new CoffeTable();
    }
}