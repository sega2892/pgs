<?php


namespace Laravel\Calc\Calc\Operations;


class Add extends Operation
{
    public function calc(float $v1, float $v2)
    {
        return $v1 + $v2;
    }
}