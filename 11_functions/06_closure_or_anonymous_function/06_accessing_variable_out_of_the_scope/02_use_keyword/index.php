<?php

$message = 'Welcome';

// using use keyword
$say_hello = function ($name) use ($message) {
    echo $message . ' ' . $name . '<br>';

    $message = 'hi';
};

$say_hello('Ahmed');

echo $message;  // use keyword pass value by value
