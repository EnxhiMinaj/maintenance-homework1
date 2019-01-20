<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/21/2019
 * Time: 12:09 AM
 */

require 'HomeWork1.php';

class HomeWorkTest3extends extends PHPUnit_Framework_TestCase
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
        $result = $this->test->calculate(5, -4);

        $this->assertSame('No negative nubers allowed!', $result);
    }
}