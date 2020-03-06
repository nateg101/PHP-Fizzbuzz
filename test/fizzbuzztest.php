<?php

  use PHPUnit\Framework\TestCase;

  require 'fizzbuzz.php';

  class FizzbuzzTest extends TestCase
  {
    public function testIsDivisibleBy3()
    {
      $fizz = New Fizzbuzz;
      $this->assertEquals($fizz->divisibleBy3(12), true);
    }

    public function testIsNotDivisibleBy3()
    {
      $fizz = New Fizzbuzz;
      $this->assertNotEquals($fizz->divisibleBy3(7), true);
    }

    public function testIsDivisibleBy5()
    {
      $fizz = New Fizzbuzz;
      $this->assertEquals($fizz->divisibleBy5(20), true);
    }

    public function testIsNotDivisibleBy5()
    {
      $fizz = New Fizzbuzz;
      $this->assertNotEquals($fizz->divisibleBy5(12), true);
    }
  }
