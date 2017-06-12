<?php
/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 9:31 AM
 */

namespace App\BookExample;


class eReaderAdaptor implements BookInterface
{
    private $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;

    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}