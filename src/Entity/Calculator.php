<?php

namespace App\Entity;

use App\Entity\Operation\Add;
use App\Entity\Operation\Divide;
use App\Entity\Operation\Multiply;
use App\Entity\Operation\Subtract;

class Calculator
{
    public function __construct(
        public float $firstNumber,
        public float $secondNumber,
        public string $operand,
    ) {
    }

    public function getFirstNumber(): float
    {
        return $this->firstNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }

    public function getOperand(): string
    {
        return $this->operand;
    }

    public function performCalculation(): float
    {
        switch ($this->getOperand()) {
            default:
            case 'add':
                $operation = new Add();
                break;
            case 'subtract':
                $operation = new Subtract();
                break;
            case 'multiply':
                $operation = new Multiply();
                break;
            case 'divide':
                $operation = new Divide();
                break;
        }

        return $operation->runCalculation($this->getFirstNumber(), $this->getSecondNumber());
    }
}
