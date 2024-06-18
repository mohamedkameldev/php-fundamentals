<?php

/**
 * Passing by Reference:
 * Function takes the variable itself and modifies it.
 * (Here we have just one variable, and function changes it)
 */
$counter = 0;

function increase(&$counter)
{
    $counter++;
    echo $counter . '<br>';
}

increase($counter);

echo $counter . '<br>'; // there are 2 references to the same variable
