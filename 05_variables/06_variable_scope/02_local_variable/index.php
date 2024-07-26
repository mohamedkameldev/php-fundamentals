<?php


function increment()
{
    $counter = 0;       // local variable
    echo $counter . '<br>';
}

increment();
echo $counter;      // can't be accessed outside its boundaries
