<?php

/**
 * PHP 5.6 introduced spread operator (...)
 * When you place the (...) in front of a function parameter,
 * the function will accept a variable number of arguments,
 * and the parameter will become an array inside the function.
 */
function sum(...$numbers) // accepts a variable number of arguments
{
    $total = 0;
    return array_sum($numbers);
}

echo sum(10, 20, 30) . '<br>';
echo sum(10, 20, 30, 40) . '<br>';
echo sum(10, 20, 30, 40, 50) . '<br>';
echo sum(10, 20, 30, 40, 50, 100) . '<br>';
