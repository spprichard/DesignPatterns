<?php

namespace App\SubExample;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump("laying down the bread.");
        return $this;
    }

    protected function addLettuce()
    {
        var_dump("adding the lettuce.");
        return $this;

    }

    protected function addSauces()
    {
        var_dump("adding some sauce.");
        return $this;

    }

    protected abstract function addPrimaryToppings();

}