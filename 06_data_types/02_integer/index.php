<?php

/*
 * is_int(): returns true or false.
 *
 * Integers are whole numbers defined in the set {…-3,-2-,-1,0,1,2,3…}.
 * The size of the integer depends on the platform where PHP runs.
 * The constant PHP_INT_SIZE specifies the size of the integer on a specific platform.
 *
 * PHP represents integer literals in: decimal - octal - binary - hexadecimal formats.
 *
 * Leading zero before the number convert it to octal (not decimal).
 */

echo PHP_INT_SIZE . "<br>";     // 8 = 64 bits signed.
echo PHP_INT_MAX . "<br>";      // 9223372036854775807
echo PHP_INT_MIN . "<br>";      // -9223372036854775808
//-------------------------------------------------------------------------------------------------------

// Decimal numbers: consist of sequence of digits without leading zeros
// The sequence may begin with a plus or minus sign, If it has no sign, then the integer is positive
$x = +1000_000_000;

$x = -1000_000_000;

// From PHP 7.4, you can use the underscores (_) to group digits in an integer to make it easier to read.
$x = 1000_000_000;
//-------------------------------------------------------------------------------------------------------

// Octal numbers: consist of a leading 0 and a sequence of digits from 0 to 7.
$x = 010 ;  // 8
$x = 0230;  // 152
//-------------------------------------------------------------------------------------------------------

// Hexadecimal numbers: consist of a leading 0x and a sequence of digits (0-9) or letters (A-F).
$x = 0x10; // decimal 16
$x = 0xFF; // decimal 255
//-------------------------------------------------------------------------------------------------------

// Binary numbers: begin with 0b are followed by a sequence of digits 0 and 1.
$x = 0b11; // decimal 2
echo $x;
