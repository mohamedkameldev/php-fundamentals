<?php

/**
 * The mixed has been available since PHP 8.0.0.
 * mixed type means one of several types.
 *
 * It’s equivalent to the following union type:
 * object | resource | array | string | int | float | bool | null
 */

function return_my_var(mixed $var): mixed
{
    return $var;
}

echo return_my_var(5) . '<br>';
echo return_my_var(7.2) . '<br>';
echo return_my_var('Hello world') . '<br>';
echo return_my_var(true) . '<br>';
print_r(return_my_var([1, 2, 4]));
