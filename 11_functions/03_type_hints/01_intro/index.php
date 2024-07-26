<?php

/**
 * Type Hints:
 * -used to enforce the types for function Parameters and Return Value,
 * (also for class properties and methods).
 *
 * -using them, PHP will check the type of a value at the call time,
 * and throw a TypeError if there is a mismatch.
 *
 *
 * In PHP 5, you can use array, callable, and class for type hints.
 * In PHP 7, you can use scalar types such as bool, float, int, and string.
 */
function add(int $x, int $y): int
{
    return $x + $y;
}

// PHP coerces a value of the compatible type into the expected scalar type.
echo add(2.5, 1.4) . '<br>';  // 3



// Starting from PHP 8.0,
// if a function returns a value of several types, you can declare it as a union type.
function add2($x, $y): int | float
{
    return $x + $y;
}
echo add2(5, 2) . '<br>';
echo add2(1.5, 4.3) . '<br>';
