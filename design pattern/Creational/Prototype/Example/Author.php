<?php

namespace App;

class Author
{
public string $name;
public array $page = [];

public function __construct($name)
{
    $this->name= $name;
}
public function addPage(Page $page){
    $this->page[] = $page;
}
}