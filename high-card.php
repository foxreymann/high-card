<?php

$card_stack_array = [
'Ace of Spades' => 11379,
'King of Clubs' => 85561,
'Queen of Hearts' => 703,
'Jack of Diamonds' => 6222,
'Nine of Clubs' => 511288,
];

var_export($card_stack_array);

foreach ($card_stack_array as $card => $value) {
    echo "{$card} => {$value} ";
}
