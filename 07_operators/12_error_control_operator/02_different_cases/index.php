<?php

echo '<pre>';

// Error in Variables:
$a = 10;
$b = @$a or die("Variable Not Found");
echo "Test $b";


// Error in Files:
$f = @file("osama.txt") or die("File Not Found");
print_r($f);


// Error in Include:
(@include("osama_elzero.php")) or die("Include File Not Found");

echo '</pre>';
