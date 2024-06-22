<?php

/**
 * PHP is a loosely typed language (when you define a variable, you don’t need to declare a type for it),
 * PHP determines the variable type (based on the value).
 *
 * Type Juggling = Automatic Type Conversion:
 * PHP converts a variable from a type to another type to perform a specific operation on it.
 */

echo 1 + "2" . '<br>'; // 3

echo gettype(1 + "2") . '<br>'; // Integer

echo true . '<br>'; // 1

echo gettype(true) . '<br>'; // Boolean

echo true + true . '<br>'; // 2

echo gettype(true + true) . '<br>'; // Integer

echo 5 + '5 Lessons' . '<br>'; // 10 => Warning

echo gettype(5 + '5 Lessons') . '<br>'; // Integer => Warning
echo 10 + 15.5 . '<br>'; // 25.5

echo gettype(10 + 15.5) . '<br>'; // double => Float
