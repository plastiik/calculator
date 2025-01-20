<?php

namespace App\Tests\Entity\Operation;

use App\Entity\Operation\Add;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function testAdd()
    {
        $add = new Add();
        $result = $add->runCalculation(29, 30);

        $this->assertEquals(59, $result);
    }

    public function testAddNegativeNumbers()
    {
        $add = new Add();
        $result = $add->runCalculation(-1, -1);

        $this->assertEquals(-2, $result);
    }

    public function testAddPositiveAndNegativeNumbers()
    {
        $add = new Add();
        $result = $add->runCalculation(10, -1);

        $this->assertEquals(9, $result);
    }
}
