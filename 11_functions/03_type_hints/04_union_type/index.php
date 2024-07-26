<?php

// Starting from PHP 8.0, if a function returns a value of several types, you can declare it as a union type.

function add(int | float $x, int | float $y): int | float
{
    return $x + $y ;
}
echo add(5, 2). '<br>';
echo add(1.5, 4.3) . '<br>';
