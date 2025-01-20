<?php

namespace App\Entity\Operation;

interface OperationInterface
{
    public function runCalculation(float $firstNumber, float $secondNumber): float;
}
