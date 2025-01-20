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
}
