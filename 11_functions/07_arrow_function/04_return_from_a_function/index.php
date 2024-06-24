<?php

function multiplier($x)
{
    return fn ($y) => $x * $y;
}

$double = multiplier(2);
echo $double(50) . '<br>';

$triple = multiplier(3);
echo $triple(50) . '<br>';
