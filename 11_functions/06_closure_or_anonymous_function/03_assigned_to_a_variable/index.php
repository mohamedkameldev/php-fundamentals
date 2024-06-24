<?php


/**
 * IMPORTANT NOTE:
 * anonymous function is an Object,
 * so, you can assign it to a variable, pass it to a function, and return it from a function.
 */

echo '<pre>';

$multiply = function ($x, $y) {
    return $x * $y;
}; // note this ;    (this is an expression not just a block of code)

echo $multiply(5, 10) . '<br>';

var_dump($multiply);    // Closure

echo '</pre>';
