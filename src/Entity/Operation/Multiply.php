<?php

namespace App\Entity\Operation;

class Multiply implements OperationInterface
{
    public function runCalculation(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber * $secondNumber;
    }
}
