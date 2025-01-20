<?php

namespace App\Tests\Entity;

use App\Entity\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculator()
    {
        $calculator = new Calculator(2, 2, 'add');

        $result = $calculator->performCalculation();

        $this->assertEquals(4, $result);
    }
}
