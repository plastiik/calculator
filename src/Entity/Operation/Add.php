<?php

namespace App\Entity\Operation;

class Add implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
