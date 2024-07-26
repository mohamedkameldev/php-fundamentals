<?php
/**
 * is_bool(): returns true or false
 *
 * keywords are case-insensitive,
 * so you can write: true, True, TRUE, false, False, and FALSE.
 *
 * PHP treats the following values as false:
 *     - false keyword.
 *     - integer 0 and -0 (zero).
 *     - floats 0.0 and -0.0 (zero).
 *     - empty string ("", '') and the string “0”.
 *     - empty array (array() or []).
 *     - null.
 *     - SimpleXML objects created from attributeless empty elements.
 * PHP evaluates other values to true.
 */

$num = 15;
$is_email_valid = false;
$is_verfied = true;

echo is_bool($is_email_valid) . "<br>";     // return 1 for true
echo is_bool($num) . "<br>";                // return nothing for false

echo '<pre>';
var_dump($is_email_valid);
var_dump($is_verfied);
echo '</pre>';
