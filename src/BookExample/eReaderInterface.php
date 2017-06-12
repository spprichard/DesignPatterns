<?php
/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 9:29 AM
 */

namespace App\BookExample;

interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();
}