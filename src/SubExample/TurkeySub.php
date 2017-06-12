<?php

namespace App\SubExample;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump("adding the turkey");
        return $this;

    }

}