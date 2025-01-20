<?php

namespace App\Entity\Operation;

class Subtract implements OperationInterface
{
    public function runCalculation(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber - $secondNumber;
    }
}
