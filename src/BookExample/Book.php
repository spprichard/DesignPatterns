<?php

/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 8:31 AM
 */

namespace App\BookExample;


class Book implements BookInterface
{
    public function open(){
        var_dump("opening the paper book");
    }

    public function turnPage(){
        var_dump("turning the page of a paper book");
    }
}