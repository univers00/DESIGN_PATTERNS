<?php

namespace App;

use App\Information\BookList;

class Interpreter
{
    /*In this example, the Interpreter class can handle strings in the following formats:
            The # must be a numeric which must correlate to a book in the list of books we have

     "book author #"            Example => book author 1 ==> get the author of book 1
     "book title #"             Example => book la vie 1
     "book author title #"      Example => book uzu la vie 1
     .*/
    private $bookList;
    public function __construct(BookList $bookListIn)
    {
        $this->bookList = $bookListIn;
    }
    public function interpreter(string $request){
        $result = explode(" ",$request);
        print_r($result);

        if($result[0] == "book")
        {
            if($result[1] == "author")
            {
                if(is_numeric($result[2]))
                {
                    $book = $this->bookList->getBook($result[2]);
                    if(is_null($book))
                    {
                        return "there is no book like this in list..";
                    }else
                    {
                        return $book->getAuthor();
                    }
                }elseif ($result[2] == "title")
                {
                    if(is_numeric($result[3]))
                    {
                        $book = $this->bookList->getBook($result[3]);

                        if(is_null($book))
                        {
                            return "there is no book like this in list";
                        }else
                        {
                            return $book->getAuthorAndTitle();
                        }
                    }
                }else
                {
                    return "maybe you want to write * title * Number of book * ";
                }
            }elseif($result[1] == "title")
            {
                if(is_numeric($result[2]))
                {
                    $book = $this->bookList->getBook($result[2]);
                    if(is_null($book))
                    {
                        return "there is no book like this in list";
                    }else
                    {
                        return $book->getTitle();
                    }
                }
            }else
            {
                return "maybe you want to write * title * author or title * ";
            }
        }else
        {
            return "maybe you want to wtite * book * ";
        }
    }

}