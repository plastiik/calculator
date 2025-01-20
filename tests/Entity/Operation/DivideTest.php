<?php

namespace App\Tests\Entity\Operation;

use App\Entity\Operation\Divide;
use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
    public function testDivide()
    {
        $divide = new Divide();
        $result = $divide->runCalculation(5, 2);

        $this->assertEquals(2.5, $result);
    }

    public function testAddNegativeNumbers()
    {
        $add = new Divide();
        $result = $add->runCalculation(-10, -2);

        $this->assertEquals(5, $result);
    }

    public function testAddPositiveAndNegativeNumbers()
    {
        $add = new Divide();
        $result = $add->runCalculation(10, -2);

        $this->assertEquals(-5, $result);
    }

    public function testAddPositiveAndNegativeNumbersReverse()
    {
        $add = new Divide();
        $result = $add->runCalculation(-10, 2);

        $this->assertEquals(-5, $result);
    }
}
