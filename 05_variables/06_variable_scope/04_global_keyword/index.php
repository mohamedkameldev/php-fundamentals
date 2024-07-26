<?php

/**
 * PHP allows you to access a global variable within a function by using the global keyword.
 *
 * It’s important to note that it’s not a good practice to use global keyword.
 */
$counter = 9;

function increment()
{
    global $counter;
    $counter++;
    echo $counter . '<br>';
}

increment();
increment();
increment();
increment();

echo $counter;      // can't be accessed outside its boundaries
