<?php


/**
 * Assign by value:
 *      each variable has an unique space in the memory,
 *      if you change it's value, other variables will not be affected.
 *
 * By Default, Variables Are Always Assigned By Value.
 */

$a = "Osama";
$b = $a;

echo $a . '<br>'; // Osama
echo $b . '<br>'; // Osama


$b = "Elzero";

echo $a . '<br>'; // Osama
echo $b . '<br>'; // Elzero


$a = "School";

echo $a . '<br>'; // School
echo $b . '<br>'; // Elzero
