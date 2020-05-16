<?php
// By convention, the tests/ directory should replicate the directory of your bundle for unit tests.
// So, if you're testing a class in the src/Util/ directory, put the test in the tests/Util/ directory.

namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
	public function testAdd() {
		$calculator = new Calculator();
		$result = $calculator->add(30, 12);

		// assert that the calculator added correctly
		$this->assertEquals(42, $result);
	}
}