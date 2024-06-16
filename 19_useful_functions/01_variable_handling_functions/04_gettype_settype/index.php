<?php


/**
 * gettype(): (returns) the type of a variable.
 *
 * settype(): converts a variable to a specific type.
 */

$x = "150";                 // x is string
settype($x, "integer");     // x is int
echo gettype($x) . '<br>';


$b = true;              // b is boolean
settype($b, "integer"); // $b is now integer (1)
echo $b . '<br>';
