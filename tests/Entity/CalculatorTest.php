<?php

namespace App\Tests\Entity;

use App\Entity\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculator()
    {
        $calculator = new Calculator();
        $calculator->setFirstNumber(2);
        $calculator->setSecondNumber(2);
        $calculator->setOperand('add');

        $result = $calculator->performCalculation();

        $this->assertEquals(4, $result);
    }
}
