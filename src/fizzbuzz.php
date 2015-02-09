<?php
class Fizzbuzz {
  public function dividesByThree($n) {
    return $this->dividesBy($n, 3);
  }
  public function dividesByFive($n) {
    return $this->dividesBy($n, 5);
  }
  public function dividesByFifteen($n) {
    return $this->dividesBy($n, 15);
  }
  public function says($n) {
    if ($this->dividesByFifteen($n)) {
      return "fizzbuzz";
    }
    else if ($this->dividesByFive($n)) {
      return "buzz";
    }
    else if ($this->dividesByThree($n)) {
      return "fizz";
    }
    else {
      return $n;
    }
  }
  protected function dividesBy($number, $divisor) {
    if ($number % $divisor == 0) {
      return true;
    } else {
      return false;
    }
  }
}
