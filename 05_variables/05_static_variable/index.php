<?php

/**
 * A static variable retains its value between function calls.
 */

function increament()
{
    // $counter = 0;               // 1 1 1 1
    static $counter = 0;     // 1 2 3 4
    $counter++;
    echo $counter . '<br>';
}


increament();
increament();
increament();
increament();
