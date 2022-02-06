<?php

namespace App\Bridge;

use App\Render\Render;

abstract class Page
{

    protected $render;


    public function __construct(Render $render)
    {
        $this->render = $render;
    }


    public function changeRenderer(Render $render): void
    {
        $this->render = $render;
    }


    abstract public function view(): string;


}