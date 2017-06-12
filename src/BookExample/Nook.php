<?php
/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 9:45 AM
 */

namespace App\BookExample;


class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump("Turn Nook on");
    }

    public function pressNextButton()
    {
        var_dump("Press next button on the Nook");
    }

}