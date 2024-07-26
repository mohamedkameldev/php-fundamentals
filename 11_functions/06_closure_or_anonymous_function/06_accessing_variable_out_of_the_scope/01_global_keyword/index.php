<?php

/**
 * an anonymous function cannot access the variables from its parent scope
 */

echo '<pre>';

$message = 'welcome';

$say_hello = function ($name) {
    global $message;
    echo $message . ' ' . $name . '<br>';

    $message = 'hi';
};

$say_hello('Mohamed');

echo $message; // note: global keyword pass values by reference
