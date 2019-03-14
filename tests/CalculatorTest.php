<?php

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/Calculator.php";

class CalculatorTest extends TestCase
{
    /**
     * @assert (0, 0) == 0
     */
    public function testAdd0AndOTrue()
    {
        $firstNumber = 0;
        $secondNumber = 0;

        $expected = 0;

        $calculator = new Calculator();
        $result = $calculator->add($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (0, 1) == 1
     */
    public function testAdd0And1True()
    {
        $firstNumber = 0;
        $secondNumber = 1;

        $expected = 1;

        $calculator = new Calculator();
        $result = $calculator->add($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (1, 1) == 2
     */
    public function testAdd1And1True()
    {
        $firstNumber = 1;
        $secondNumber = 1;

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->add($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (1, 0) == 1
     */
    public function testAdd1And0True()
    {
        $firstNumber = 1;
        $secondNumber = 0;

        $expected = 1;

        $calculator = new Calculator();
        $result = $calculator->add($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (1, 0) == 1
     */
    public function testSub1And0True()
    {
        $firstNumber = 1;
        $secondNumber = 0;

        $expected = 1;

        $calculator = new Calculator();
        $result = $calculator->sub($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (0, 1) == -1
     */
    public function testSub0And1True()
    {
        $firstNumber = 0;
        $secondNumber = 1;

        $expected = -1;

        $calculator = new Calculator();
        $result = $calculator->sub($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

    /**
     * @assert (1, 1) == 0
     */
    public function testSub1And1True()
    {
        $firstNumber = 1;
        $secondNumber = 1;

        $expected = 0;

        $calculator = new Calculator();
        $result = $calculator->sub($firstNumber, $secondNumber);
        $this->assertEquals($expected, $result);
    }

}