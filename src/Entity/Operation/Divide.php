<?php

namespace App\Entity\Operation;

class Divide implements OperationInterface
{
    public function runCalculation(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber / $secondNumber;
    }
}
