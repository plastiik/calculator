<?php

namespace App\Entity;

use App\Entity\Operation\Add;
use App\Entity\Operation\Divide;
use App\Entity\Operation\Multiply;
use App\Entity\Operation\Subtract;
use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{
    /**
     * @Assert\Type("float")
     *
     * @Assert\NotEqualTo("0")
     */
    public $firstNumber;

    /**
     * @Assert\Type("float")
     *
     * @Assert\NotEqualTo("0")
     */
    public $secondNumber;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide"})
     */
    public $operand;

    public function getFirstNumber(): float
    {
        return $this->firstNumber;
    }

    public function setFirstNumber($firstNumber): float
    {
        $this->firstNumber = $firstNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }

    public function setSecondNumber($secondNumber): float
    {
        $this->secondNumber = $secondNumber;
    }

    public function getOperand(): string
    {
        return $this->operand;
    }

    public function setOperand($operand): void
    {
        $this->operand = $operand;
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
