<?php

function add(int $x, int $y)
{
    return $x + $y;
}

// PHP coerces a value of the compatible type into the expected scalar type.
echo add(2.5, 1.4) . '<br>';  // 3
