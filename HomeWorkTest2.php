<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/20/2019
 * Time: 11:48 PM
 */
require 'HomeWork1.php';

class HomeWork1Test2 extends PHPUnit_Framework_TestCase
{
    private $test;

    protected function setUp()
    {
        $this->test = new HomeWork1();
    }

    protected function tearDown()
    {
        $this->test = NULL;
    }

    public function testCalculate()
    {
        $result = $this->test->calculate(5, 4);
        $array = array(
            '0' => 5,
            '1' => 8,
            '2' => 13,
            '3' => 21,
            '4' => 34
        );
        $this->assertSame($array, $result);
    }
}