<?php


/**
 * func_get_args() function returns an array that contains all function arguments.
 */

function sum()
{
    $total = 0;
    $numbers = func_get_args();
    foreach($numbers as $number) {
        $total += $number;
    }
    return $total;
}
// we don’t specify any parameter for the sum() function.
// When calling the sum() function, we can pass any number of arguments into it.

echo sum(1, 2, 3) . '<br>';
echo sum(1, 2, 3, 4) . '<br>';
echo sum(1, 2, 3, 4, 5) . '<br>';
echo sum(1, 2, 3, 4, 5, 10) . '<br>';
