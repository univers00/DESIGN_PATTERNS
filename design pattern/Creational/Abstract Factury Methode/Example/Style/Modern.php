<?php

namespace App\Style;

use App\FurnitureDesign;
use App\FurnitureStyleDesign;
use App\Modern\Chair;
use App\Modern\CoffeTable;
use App\Modern\Sofa;


class Modern implements FurnitureStyleDesign
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