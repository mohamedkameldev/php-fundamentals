<?php

/**
 * Nullable type was introduced in PHP 7.1.
 * allows you to pass an argument or null.
 * (note you must pass anything - you can't leave it empty)
 *
 * Important Note: mixed parameters can't be nullable(because it has null by default).
 */

function say_hello(?string $str): string
{
    return  $str ? 'Hello '. $str . '<br>' : 'Hello user <br>';
}

echo say_hello('Mohamed');
echo say_hello('Amira');
echo say_hello(null);
// echo say_hello();   // Error - Expected one Argument, found 0
