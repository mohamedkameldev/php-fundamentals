<?php


function my_function($param)
{
    echo 'this is '. $param . ' from a variable function <br>';
}


// call_user_func('my_function', 'Hello, World!');

$callable = 'my_function';
// $callable('hello world');   // we call the function usning a variable.

call_user_func($callable, 'Hello, World!');

echo is_callable($callable);
