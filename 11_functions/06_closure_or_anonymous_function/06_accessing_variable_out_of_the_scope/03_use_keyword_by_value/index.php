<?php

$message = 'Welcome';

// using use keyword
$say_hello = function ($name) use (&$message) {
    echo $message . ' ' . $name . '<br>';

    $message = 'hi';
};

$say_hello('Ahmed');

echo $message;  // & make use keyword pass value by reference
