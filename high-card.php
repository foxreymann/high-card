<?php

require 'vendor/autoload.php';

function highCard($card_stack, $players_cards) {
  $intersect = array_intersect(array_keys($card_stack), $players_cards);
  return $card_stack[reset($intersect)];
}


use PHPUnit\Framework\TestCase;

class Test extends TestCase {

  public function testTasksExample() {
    $card_stack = [
    'Ace of Spades' => 11379,
    'King of Clubs' => 85561,
    'Queen of Hearts' => 703,
    'Jack of Diamonds' => 6222,
    'Nine of Clubs' => 511288,
    ];

    $players_cards = [
    'Two of Spades',
    'Six of Hearts',
    'King of Clubs',
    'Nine of Clubs',
    ];

    $expected = 85561; 
    $actual = highCard($card_stack, $players_cards);

    $this->assertEquals($actual, $expected);
  }

}
