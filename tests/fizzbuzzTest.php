<?php
require "./src/fizzbuzz.php";

class FizzbuzzTest extends PHPUnit_Framework_TestCase {
  protected $fizz;

  protected function setUp() {
    $this->fizz = new Fizzbuzz();
  }
  public function testDividesByThree() {
    $this->assertTrue($this->fizz->dividesByThree(3));
  }
  public function testDoesNotDivideByThree() {
    $this->assertFalse($this->fizz->dividesByThree(1));
  }
  public function testDividesByFive() {
    $this->assertTrue($this->fizz->dividesByFive(5));
  }
  public function testDoesNotDivideByFive() {
    $this->assertFalse($this->fizz->dividesByFive(1));
  }
  public function testDividesByFifteen() {
    $this->assertTrue($this->fizz->dividesByFifteen(15));
  }
  public function testDoesNotDivideByFifteen() {
    $this->assertFalse($this->fizz->dividesByFifteen(1));
  }
  public function testPlaysFizzbuzz() {
    $this->assertEquals($this->fizz->says(6), "fizz");
    $this->assertEquals($this->fizz->says(10), "buzz");
    $this->assertEquals($this->fizz->says(15), "fizzbuzz");
    $this->assertEquals($this->fizz->says(7), 7);
  }
}
