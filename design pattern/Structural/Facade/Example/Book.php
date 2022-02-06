<?php

namespace App;

class Book
{
private string $author;
private string $title;
    function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    function getAuthor():string
    {
        return $this->auhor;
    }
    function getTitle():string
    {
        return $this->title;
    }
}
