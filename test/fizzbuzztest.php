<?php

  use PHPUnit\Framework\TestCase;

  require 'fizzbuzz.php';

  class FizzbuzzSpec extends TestCase {

    public function testIsDivisibleBy3() {
      $fizz = New Fizzbuzz;
      $this->assertEquals($fizz->divisibleBy3(12), true);
    }
  }
