<?php

/*
 * var_dump() is a built-in function that,
 * allows you to dump the information about a variable,
 * accepts a variable and displays its type and value.
 *
 *
 * you can define a function that Wrap var_dump() in a pre tag to make the output more readable.
 */

function d($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

$amount = 100;
d($amount);
