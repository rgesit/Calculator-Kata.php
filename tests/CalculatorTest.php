<?php

use \Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase {
	
	public function testEmptyString(){
		$calc = new Calculator();

		$result = $calc->add("");

		$this->assertEquals(0, $result);
	}

}