<?php

class MyClass
{
    public static function myMethod($param)
    {
        echo $param . ' from myMethod <br>';
    }
}

// since you need to use a static function, you can use it directly with the class name
$callable = ['MyClass', 'myMethod'];
$callable('say hello to laravel');

call_user_func(['MyClass', 'myMethod'], 'parameter');

echo is_callable($callable);


// also you can use it with objects
$obj = new MyClass();

$callable = [$obj, 'myMethod'];
$callable('Hello world');
