<?php
/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 9:06 AM
 */

namespace App\BookExample;

interface BookInterface
{
    public function open();

    public function turnPage();
}