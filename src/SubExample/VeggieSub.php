<?php

namespace App\SubExample;

class VeggieSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump("adding the veggies");
        return $this;

    }

}