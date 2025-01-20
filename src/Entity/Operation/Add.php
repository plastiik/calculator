<?php

namespace App\Entity\Operation;

class Add implements OperationInterface
{
    public function runCalculation(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
