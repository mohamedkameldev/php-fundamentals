<?php

/*
 * die() is a built-in function that,
 * displays a message and terminates the execution of the script.
 *
 * you can combine the var_dump() function with the die()
 * to print the content of a variable and then terminate the excecution.
 */

function dd($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    die;
}

$amount = 100;
dd($amount);

echo 'this is a messege after die function';
