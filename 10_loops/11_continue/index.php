<?php

/**
 * continue statement forces PHP to immediately skip all the statements that follow it,
 * and start the next iteration from the beginning.
 *
 * Like the break statement, continue statement also accepts an optional number,
 * that specifies the number of levels of enclosing loops it will skip.
 *
 * If you specify continue 2,
 * PHP will skip to the next iteration of the loop two levels up from the current loop.
 *
 * If you don’t specify the number that follows the continue keyword, it defaults to 1.
 * In this case, the continue statement only skips to the end of the current iteration.
 */

echo '<pre>';

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($j == 1) {
            continue ; // Skip the rest of the current iteration of both $j loop and $i loop
        }
        echo "i = $i, j = $j \t";
    }
}

echo '<br>';


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($j == 1) {
            continue 2; // Skip the rest of the current iteration of both $j loop and $i loop
        }
        echo "i = $i, j = $j \t";
    }
}
echo '</pre>';
