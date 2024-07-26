<?php


/**
 * IMPORTANT NOTE:
 * anonymous function is an Object,
 * so, you can assign it to a variable, pass it to a function, and return it from a function.
 *
 * you can pass an anonymous function to another built in or user defined function as a callable.
 *
 * array_map(): accepts a callback function and an array.
 * applies the callback function to each element and return a new array.
 */

$arr = [1, 2, 3];

$arr2 = array_map(function ($element) {
    return $element * 2;
}, $arr);
// you can use a named function rather than the anonymous one.

print_r($arr2);
