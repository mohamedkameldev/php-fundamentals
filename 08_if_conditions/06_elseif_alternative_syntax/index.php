<?php

$x = 10;
$y = 20;

if ($x > $y) :
    $message = 'x is greater than y';
elseif ($x < $y):
    $message = 'x is less than y';
else:
    $message = 'x is equal to y';
endif;

echo $message;
