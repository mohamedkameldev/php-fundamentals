<?php

$counter = 9; // this variable is global.
// That means that you can access the variable anywhere within the script except inside a function.

function increment()
{
    $counter = 0;
    $counter++;
    echo $counter . '<br>'; // can't use the global variable, you must define it again
}

increment();
increment();
increment();
increment();

echo $counter; // this is the global one.
