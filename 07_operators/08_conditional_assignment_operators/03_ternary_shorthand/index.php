<?php

/*
 * Ternary shorthand: (also known as Elvis operatory)
 * It is the ternary operator with the second operand omitted.
 *
 *      $expression ?: $default_value;
 *
 * Output = Expression if it exists and not false value (false, null,'' , 0, '0', [], ...).
 */

$inputUsername = null; // false value
$username = $inputUsername ?: 'guest';
echo $username . '<br>';

$inputUsername = ""; // false value
$username = $inputUsername ?: 'guest';
echo $username . '<br>';

$inputUsername = "mohamed"; // true value
$username = $inputUsername ?: 'guest';
echo $username . '<br>';
