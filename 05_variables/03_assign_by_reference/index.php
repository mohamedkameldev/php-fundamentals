<?php


/**
 * Assigned By Reference: Make Variable Alias Or Point To Another.
 * (the 2 variables refere to the same block in the memory)
 * (the same block has 2 different names)
 *
 */

$a = "Osama";
$b = &$a;

echo $a . '<br>'; // Osama
echo $b . '<br>'; // Osama


$b = "Elzero";

echo $a . '<br>'; // Elzero
echo $b . '<br>'; // Elzero


$a = "School";

echo $a . '<br>'; // School
echo $b . '<br>'; // School
