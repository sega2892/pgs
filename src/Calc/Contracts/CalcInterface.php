<?php


namespace Laravel\Calc\Calc\Contracts;


use Laravel\Calc\Calc\Operations\Operation;

interface CalcInterface
{
    public function calc(float $v1, Operation $op, float $v2);
}