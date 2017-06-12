<?php
/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 9:27 AM
 */

namespace App\BookExample;


class Kindle implements eReaderInterface
{

    public function turnOn(){
        var_dump("Turn Kindle on");
    }

    public function pressNextButton(){
        var_dump("Press next button on the Kindle");
    }
}