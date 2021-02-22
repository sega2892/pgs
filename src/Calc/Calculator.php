<?php


namespace Laravel\Calc\Calc;


use Laravel\Calc\Calc\Contracts\CalcInterface;
use Laravel\Calc\Calc\Operations\Operation;

class Calculator implements CalcInterface
{
    public function calc(float $v1, Operation $op, float $v2)
    {
        $op->calc($v1, $v2);
    }
}