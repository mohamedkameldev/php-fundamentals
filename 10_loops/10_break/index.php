<?php


/**
 * break statement terminates the execution of the current for, do...while, while, or [switch] statement.
 *
 * break statement accepts an optional number,
 * that specifies the number of nested enclosing structures to be broken out of.
 *
 * break; exits the current (innermost) loop or switch.
 * break n; exits n levels of loops or switch statements. If n is not provided, it defaults to 1.
 */

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i === 3) {
            break 2;    // break the 2 loops (inner & outer)
        }
        echo "($i, $j)\n";
    }
}
