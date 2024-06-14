<?php

/**
 * Floats, Doubles, or Real numbers: are floating-point numbers.
 * PHP uses the IEEE 754 double format (float64) to represent floats.
 *
 * is_float(): returns true or false.
 * is_real(): deprecated.
 */

echo PHP_FLOAT_DIG . "<br>";
echo PHP_FLOAT_MAX . "<br>";
echo PHP_FLOAT_MIN . "<br>";

$f = 3.14;
$f = 0.314E1; // scientific notation(all number is a fraction): 0.314 * 10^1


// Since PHP 7.4, you can use the underscores in floats to make long numbers more readable.
$f = 1_234_457.89_400_65;


// computer cannot represent exact floating-point numbers, it only can use approximate representations.
// here it will compute the result of 0.1 + 0.1 + 0.1 is 0.299999999…, not 0.3.
$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // return false


echo is_float(0.2);     // true
echo is_float(1);       // false

// echo is_real(0.5); // deprecated
