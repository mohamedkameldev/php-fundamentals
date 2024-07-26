<?php

/**
 * Passing by Value:
 * Function copies the variable and modifies this copy.
 * (It doesn’t change the original variable)
 *
 * The value of an argument within the function is changed and doesn’t get changed outside the function,
 * because it is passed by value.
 */

$counter = 0;

function increase($counter)
{
    $counter++;
    echo $counter . '<br>';
}

increase($counter);

echo $counter . '<br>'; // the original variable doesn't changed
