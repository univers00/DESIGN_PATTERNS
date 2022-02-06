<?php

namespace App;

class Page
{
public string $title;
public Author $author;
public string $body;
public array $comments = [];
public string $background;
public int $marginTop;
public int $marginBottom;
public int $pageNum;

    public function __construct($pageNum,
                                $title,
                                $author,
                                $body,
                                $background,
                                $marginBottom,
                                $marginTop)
    {
        $this->pageNum = $pageNum;
        $this->title = $title;
        $this->author = $author;
        $this->body = $body;
        $this->background = $background;
        $this->marginTop =$marginTop;
        $this->marginBottom = $marginBottom;
        $this->author->addPage($this);

    }
    public function addComment($string)
    {
        $this->comments[] = $string;

    }
    public function __clone(){
        $this->pageNum =   $this->pageNum;
        $this->title = "Copy -" . $this->title;
        $this->author = $this->author;
        $this->body = $this->body;
        $this->background =  $this->background;
        $this->marginTop = $this->marginTop;
        $this->marginBottom = $this->marginBottom;
        $this->comments = $this->comments;
        $this->author->addPage($this);
    }
}