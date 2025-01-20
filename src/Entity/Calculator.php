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
     * @Assert\Type("integer")
     *
     * @Assert\NotEqualTo("0")
     */
    public $firstNumber;

    /**
     * @Assert\Type("integer")
     *
     * @Assert\NotEqualTo("0")
     */
    public $secondNumber;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide"})
     */
    public $operand;

    /**
     * @return int
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param int $firstNumber
     */
    public function setFirstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return int
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param int $secondNumber
     */
    public function setSecondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * @return int
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * @param int $operand
     */
    public function setOperand($operand)
    {
        $this->operand = $operand;
    }

    public function performCalculation()
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
