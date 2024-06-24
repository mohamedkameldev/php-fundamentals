<?php

/**
 * IMPORTANT NOTE:
 * anonymous function is an Object,
 * so, you can assign it to a variable, pass it to a function, and return it from a function.
 */

function multiplier($x)     // this function returns anonymous function
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}

$double = multiplier(2);    // variable assigned to an anonymous function
echo $double(5) . '<br>';


$triple = multiplier(3);    // variable assigned to an anonymous function
echo $triple(9) . '<br>';
