<?php

namespace App;

use App\State\StateStars;

class BookContext
{
    //Control State

    private $book = NULL;

    private $bookTitleState = NULL;

    //bookList is not instantiated at construct time
    public function __construct($book_in)
    {
        $this->book = $book_in;
        $this->setTitleState(new StateStars());
    }
    public function getBookTitle()
    {
        return $this->bookTitleState->showTitle($this);
    }
    public function getBook()
    {
        return $this->book;
    }
    public function setTitleState($titleState_in)
    {
        $this->bookTitleState = $titleState_in;
    }

}