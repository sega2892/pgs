<?php


namespace Laravel\Calc\Calc;



use http\Exception\InvalidArgumentException;
use Laravel\Calc\Calc\Operations\Add;
use Laravel\Calc\Calc\Operations\Mul;
use Laravel\Calc\Calc\Operations\Operation;
use Laravel\Calc\Calc\Operations\Sub;

class OpResolver
{
public static function resolver(string $op):Operation
{
    switch ($op) {
        case 'add': return new Add();
        case 'sub': return new Sub();
        case 'mul': return new Mul();
        default:
            throw new InvalidArgumentException('error'. $op);

    }
}
}