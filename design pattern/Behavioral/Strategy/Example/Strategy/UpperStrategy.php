<?php

namespace App\Strategy;

class UpperStrategy implements InterfaceStrategy
{
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        return strtoupper ($title);
    }
}