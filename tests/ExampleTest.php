<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {

	public function test_is_number_multiple_3(
	) {

		$fizzBuzz = new FizzBuzz();
		$result = $fizzBuzz->evaluate(3);

		$this->assertEquals("Fizz", $result);
	}

	public function test_is_number_multiple_5(
		) {
	
			$fizzBuzz = new FizzBuzz();
			$result = $fizzBuzz->evaluate(5);
	
			$this->assertEquals("Buzz", $result);
		}

	public function test_is_number_multiple_3_and_5(
		) {
	
			$fizzBuzz = new FizzBuzz();
			$result = $fizzBuzz->evaluate(15);
	
			$this->assertEquals("FizzBuzz", $result);
		}

	public function test_is_number_not_multiple_3_or_5(
		) {
	
			$fizzBuzz = new FizzBuzz();
			$result = $fizzBuzz->evaluate(8);
	
			$this->assertEquals(8, $result);
		}


}


