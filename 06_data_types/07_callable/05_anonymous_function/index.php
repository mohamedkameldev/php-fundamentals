<?php


$callable = function ($text) {
    echo 'this is my text ' . $text . ' from Closure <br>';
};

$callable('my text');

call_user_func($callable, 'parameter');

echo is_callable($callable);
