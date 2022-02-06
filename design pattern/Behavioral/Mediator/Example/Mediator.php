<?php

namespace App;

use App\MediatorAndActor\Author;
use App\MediatorAndActor\Book;
use App\MediatorAndActor\Title;

class Mediator
{
    /*In this example,
    BookMediator is notified by
    author or title if they change to all upper case or all lower case.
    When either changes case.
    BookMediator calls the other to change its case to match.

    if author change state ==> notify to title change either state
    or
    if title change state ==> notify to author change either state
    */


    private $authorObject;
    private $titleObject;
    function __construct($author_in, $title_in)
    {
        $this->authorObject = new Author($author_in,$this);
        $this->titleObject  = new Title($title_in,$this);
    }
    function getAuthor()
    {
        return $this->authorObject;
    }
    function getTitle()
    {
        return $this->titleObject;
    }
    // when title or author change case, this makes sure the other change to
    // stays in sync
    function change(Book $changingClassIn)
    {
        if ($changingClassIn instanceof Author) {
            if ('upper' == $changingClassIn->getState()) {
                if ('upper' != $this->getTitle()->getState()) {
                    $this->getTitle()->setTitleUpperCase();
                }
            } elseif ('lower' == $changingClassIn->getState()) {
                if ('lower' != $this->getTitle()->getState()) {
                    $this->getTitle()->setTitleLowerCase();
                }
            }
        } elseif ($changingClassIn instanceof Title) {
            if ('upper' == $changingClassIn->getState()) {
                if ('upper' != $this->getAuthor()->getState()) {
                    $this->getAuthor()->setAuthorUpperCase();
                }
            } elseif ('lower' == $changingClassIn->getState()) {
                if ('lower' != $this->getAuthor()->getState()) {
                    $this->getAuthor()->setAuthorLowerCase();
                }
            }
        }
    }
}