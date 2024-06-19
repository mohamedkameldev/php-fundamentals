<?php

// Starting from PHP 7.0, if a function doesn’t return a value, you use the void type.
function add($x, $y): void
{
    echo $x + $y . '<br>';
}
add(5, 2);
add(1.5, 4.3) ;
