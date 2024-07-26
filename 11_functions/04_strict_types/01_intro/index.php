<?php

declare(strict_types=1);
/**
 * By adding the strict typing directive to the file, the code will execute in the strict mode.
 *
 * PHP enables the strict mode on a per-file basis.
 *
 * in the strict mode, PHP expects the values with the type matching with the target types,
 * if there’s a mismatch, PHP will issue an error.
 *
 * special case: if the target type is float, you can pass a value of type integer
 */

function add(int $x, int $y)
{
    return $x + $y;
}

echo add(2.5, 1.4) . '<br>';  // Fatal error
