<?php

namespace App\Tests\Entity\Operation;

use App\Entity\Operation\Subtract;
use PHPUnit\Framework\TestCase;

class SubtractTest extends TestCase
{
    public function testSubtract()
    {
        $subtract = new Subtract();
        $result = $subtract->runCalculation(30, 29);

        $this->assertEquals(1, $result);
    }

    public function testAddNegativeNumbers()
    {
        $add = new Subtract();
        $result = $add->runCalculation(-10, -2);

        $this->assertEquals(-8, $result);
    }

    public function testAddPositiveAndNegativeNumbers()
    {
        $add = new Subtract();
        $result = $add->runCalculation(10, -2);

        $this->assertEquals(12, $result);
    }

    public function testAddPositiveAndNegativeNumbersReverse()
    {
        $add = new Subtract();
        $result = $add->runCalculation(-10, 2);

        $this->assertEquals(-12, $result);
    }
}
