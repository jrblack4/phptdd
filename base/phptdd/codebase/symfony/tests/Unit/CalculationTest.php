<?php

namespace App\Tests\Unit;

use App\Example\Calculator;
use PHPUnit\Framework\TestCase;
use Symfony\Polyfill\Php81\Php81;

class CalculationTest extends TestCase
{
    /**
    * @covers \App\Example\Calculator::calculateTotal
    */
    public function testCanCalculateTotal(): void
    {
        $expectedTotal = 6;
        $a = 1;
        $b = 2;
        $c = 3;

        $calculator = new Calculator();
        $total = $calculator->calculateTotal($a, $b, $c);

        $this->assertEquals($expectedTotal, $total);
    }

    /**
    * @covers \App\Example\Calculator::add
    */
    public function testCanAddIntegers()
    {
        $expectedSum = 7;
        $a = 2;
        $b = 5;
        $calculator = new Calculator();
        $sum = $calculator->add($a, $b);
        $this->assertEquals($expectedSum, $sum);
    }

    /**
    * @covers \App\Example\Calculator::subtract
    * @covers \App\Example\Calculator::getDifference
    */
    public function testCanSubtractIntegers()
    {
        $expectedDifference = 4;
        $a = 10;
        $b = 6;
        $calculator = new Calculator();
        $difference = $calculator->subtract($a, $b);
        $this->assertEquals($expectedDifference, $difference);
    }
}
