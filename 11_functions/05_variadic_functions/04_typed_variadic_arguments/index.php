<?php

// declare(strict_types=1);

// PHP 7 allows you to declare types for variadic arguments

function sum(int ...$numbers): int
{
    $total = 0;
    foreach($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo sum(5.5, 12, 32) . '<br>';
echo sum(5.5, 12, 32, 64) . '<br>';
echo sum(5.5, 12, 32, 64, 80.4) . '<br>';
