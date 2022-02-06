<?php
namespace App;

require_once (__DIR__."/../vendor/autoload.php");


/*

In this example, the BookMark class is the "Memento", and holds the state of the BookReader class. The BookReader class would be the "Originator" in this example, as it had the original state. Client holds the BookMark object, and so is the "Caretaker".

The memento should be set up so that the caretaker can create, set, and get memento values for an originator. However, the caretaker itself can not access any of the values stored in the memento.

In my example I do this by having memento only allow calls to it's get and set functions in which it is passed a BookReader object. The BookMark can then get or set the titles or pages for a bookreader object it is passed. The downside of my implementation is that I have BookReader's get and set functions as public.

*/
writeln('BEGIN TESTING MEMENTO PATTERN');
writeln('');

$bookReader = new BookReader('Core PHP Programming, Third Edition','103');
$bookMark = new BookMark($bookReader);

writeln('(at beginning) bookReader title: '.$bookReader->getTitle());
writeln('(at beginning) bookReader page: '.$bookReader->getPage());

$bookReader->setPage("104");
$bookMark->setPage($bookReader);
writeln('(one page later) bookReader page: '.$bookReader->getPage());

$bookReader->setPage('2005');  //oops! a typo
writeln('(after typo) bookReader page: '.$bookReader->getPage());

// return

$bookMark->getPage($bookReader);
writeln('(back to one page later) bookReader page: '.$bookReader->getPage());
writeln('');

writeln('END TESTING MEMENTO PATTERN');

function writeln($line_in) {
    echo $line_in."\n";
}
