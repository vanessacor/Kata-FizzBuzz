<?php

namespace App;

class FizzBuzz {

  public function evaluate($number) {
    if($number % 3 === 0 && $number % 5 === 0) {
      return "FizzBuzz";
    }
    if($number % 3 === 0) {
      return "Fizz";
    }
    if($number % 5 === 0) {
      return "Buzz";
    }

    return $number;
  }

  public function printNumbers() {
    for ($i = 1; $i <= 100; $i++) {
      echo $this->evaluate($i) . "<br>" ;
      
    }
  }
}
  
  $test = new FizzBuzz();
  $test->printNumbers();

  