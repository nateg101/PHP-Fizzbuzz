<?php

  use PHPUnit\Framework\TestCase;

  require 'fizzbuzz.php';

  class FizzbuzzTest extends TestCase
  {
    protected $fizzbuzz;

    protected function setUp(): void
    {
        $this->fizzbuzz = new Fizzbuzz();
    }

    public function testIsDivisibleBy3()
    {
      $this->assertEquals($this->fizzbuzz->divisibleBy3(12), true);
    }

    public function testIsNotDivisibleBy3()
    {
      $this->assertNotEquals($this->fizzbuzz->divisibleBy3(7), true);
    }

    public function testIsDivisibleBy5()
    {
      $this->assertEquals($this->fizzbuzz->divisibleBy5(20), true);
    }

    public function testIsNotDivisibleBy5()
    {
      $this->assertNotEquals($this->fizzbuzz->divisibleBy5(12), true);
    }

    public function testFizzBuzzOutput()
    {
      $this->assertEquals($this->fizzbuzz->output(6), "Fizz");
      $this->assertEquals($this->fizzbuzz->output(10), "Buzz");
      $this->assertEquals($this->fizzbuzz->output(15), "FizzBuzz");
      $this->assertEquals($this->fizzbuzz->output(4), 4);
    }
  }
