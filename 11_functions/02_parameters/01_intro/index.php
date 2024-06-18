<?php


/**
 * When you pass multiple arguments to a function,
 * you can break the list the arguments vertically to make the code more readable.
 * (It’s a good practice to list arguments vertically when the argument list is long)
 *
 * From PHP 7.0,
 * The argument list may contain a trailing comma (,) which the PHP interpreter will ignore.
 */


function concat($str1, $str2)
{
    return $str1 . $str2;
}

$greeting = concat(
    'Welcome ',
    'Home', // this is the trailing comma
);

echo $greeting;
