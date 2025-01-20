<?php

namespace App\Tests\Entity\Operation;

use App\Entity\Operation\Multiply;
use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    public function testMultiply()
    {
        $multiply = new Multiply();
        $result = $multiply->runCalculation(2, 5);

        $this->assertEquals(10, $result);
    }

    public function testAddNegativeNumbers()
    {
        $add = new Multiply();
        $result = $add->runCalculation(-10, -2);

        $this->assertEquals(20, $result);
    }

    public function testAddPositiveAndNegativeNumbers()
    {
        $add = new Multiply();
        $result = $add->runCalculation(10, -2);

        $this->assertEquals(-20, $result);
    }

    public function testAddPositiveAndNegativeNumbersReverse()
    {
        $add = new Multiply();
        $result = $add->runCalculation(-10, 2);

        $this->assertEquals(-20, $result);
    }
}
