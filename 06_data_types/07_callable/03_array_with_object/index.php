<?php

class MyClass
{
    public function myMethod($param)
    {
        echo $param . ' from myMethod <br>';
    }
}

$obj = new MyClass();

$callable = [$obj, 'myMethod'];
$callable('Hello world');
$callable('say hello to mohamed');

call_user_func([$obj, 'myMethod'], 'second callable');

echo is_callable($callable);
