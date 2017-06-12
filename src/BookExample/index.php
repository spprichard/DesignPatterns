<?php

require '../../vendor/autoload.php';

use \App\BookExample\BookInterface;
use \App\BookExample\Book;
use \App\BookExample\eReaderAdaptor;
use \App\BookExample\Kindle;
use \App\BookExample\Nook;

class Person{
    public function read(BookInterface $book){
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new Book());
//(new Person)->read(new eReaderAdaptor(new Nook()));
//(new Person)->read(new eReaderAdaptor(new Kindle()));

