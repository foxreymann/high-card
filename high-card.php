<?php

require 'vendor/autoload.php';

function highCard($string, $array) {
}


use PHPUnit\Framework\TestCase;

class Test extends TestCase {

  public function testTasksExample() {
    $string = 'Fox likes dogs and cats';
    $array = ['Fox likes dogs'];
    $expected = [
      'message' => 'one element from the array has been found in the string. element is Fox likes dogs',
      'elements' => 'Fox likes dogs'
    ];
    $actual = highCard($string, $array);
    $this->assertEquals($actual, $expected);
  }

}
