<?php

/*
 * Constant is Immutable,
 * that means the value of a constant cannot be changed during the execution of the PHP script.
 *
 * Constant names:
 *      - doesn’t start with dollar sign($).
 *      - Uppercase (all chars).
 *      - seperate words with (_).
 *      - can start with a char or (_).
 *      - can't start with a number.
 *      - case-sensitive (WIDTH != width).
 *      - It’s possible to define case-insensitive constants, However, it’s deprecated since PHP 7.3
 *
 * Constant can hold a simple value like a number, a string, a boolean value.
 * now Constant can hold an array (from PHP 7.0)
 *
 * Like superglobals, the scope of a constant is global.
 * Constants can be accessed from anywhere in a script without regard to scope.
 *
 * There are 2 ways to define a Constant:
 *      1- define() function.
 *      2- const keyword.
 */


define('_PI4', 3.14);
echo _PI4 . "<br>";

define('NAMES', ['Mohamed', 'Ahmed', 'Hussein', 'Ali']);  // constant array
print_r(NAMES);
echo "<br>";


const TAX_RATIO = 0.14;
$net_salary = 5000 + (5000 * TAX_RATIO);
echo $net_salary . "<br>";

const RGB = ['Red', 'Green', 'Blue'];
print_r(RGB);
echo "<br>";
