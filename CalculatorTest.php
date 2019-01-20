<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/20/2019
 * Time: 11:08 PM
 */

require 'Calculator.php';

class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertSame(3, $result);
    }

}