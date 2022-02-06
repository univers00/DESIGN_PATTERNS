<?php

namespace App\Strategy;

class ExclaimStrategy implements InterfaceStrategy
{
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        return Str_replace(' ','!',$title);
    }
}