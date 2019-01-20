<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/20/2019
 * Time: 10:27 PM
 */
require 'HomeWork1.php';

class HomeWork1Test extends PHPUnit_Framework_TestCase
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

    public function testFibonaci()
    {
        $result = $this->test->fibonacci(5);
        $array = array(
            '0' => 0,
            '1' => 1,
            '2' => 1,
            '3' => 2,
            '4' => 3,
            '5' => 5
        );
        $this->assertSame($array, $result);
    }
}