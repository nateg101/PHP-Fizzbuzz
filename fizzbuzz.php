<?php

  Class Fizzbuzz
  {
    public function divisibleBy3($number)
    {
      if ($number % 3 === 0) {
        return true;
      }
    }

    public function divisibleBy5($number)
    {
      if ($number % 5 === 0) {
        return true;
      }
    }

    public function output($number)
    {
      if ($this->divisibleBy3($number) && $this->divisibleBy5($number)) {
        return "FizzBuzz";
      } else if ($this->divisibleBy3($number)) {
        return "Fizz";
      } else if ($this->divisibleBy5($number)) {
        return "Buzz";
      } else {
        return $number;
      }
    }
  }
