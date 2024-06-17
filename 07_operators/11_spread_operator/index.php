<?php


/**
 * Spread Operator(...): used in two contexts:
 *      -Unpacking Arrays:
 *      -Argument Unpacking:
 */

// Unpacking Arrays:
echo '<pre>';
$arr = [1, 2, 3];
$arr2 = [9, ...$arr, 4, 5, 6];
print_r($arr2);
echo '</pre>';


// Argument Unpacking:
echo fun(...$arr2);


function fun(int $x, int $y, int $z)
{
    return $x + $y + $z;
}
