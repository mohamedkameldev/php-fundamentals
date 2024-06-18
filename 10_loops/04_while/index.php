<?php

/**
 * In the while loop:
 * If the expression evaluates to false before the first iteration starts, the loop ends immediately.
 * Since PHP evaluates the expression before each iteration, it is also known as a pretest loop.
*/
$x = 0;
while ($x <= 10) {
    print $x . '<br>';
    $x++;
}
