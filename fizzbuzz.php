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
  }
