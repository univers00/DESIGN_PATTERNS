<?php

namespace App\Entity;
use App\Visitor\Visitor;
interface Entity
{
    public function accept(Visitor $visitor): string;

}