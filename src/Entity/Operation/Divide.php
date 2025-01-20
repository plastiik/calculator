<?php

namespace App\Entity\Operation;

class Divide implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber): float
    {
        return $firstNumber / $secondNumber;
    }
}
