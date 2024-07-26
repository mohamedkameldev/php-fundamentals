<?php


/*
 * Comparison Operators:
 *      used to compare two values.
 *      returns a Boolean value, either true or false.
 *
 * == (Equal): Returns true if the operands are equal.
 * != (Not equal): Returns true if the operands are not equal.
 * <> (Not equal): Another way to write the not equal operator.
 *
 * === (Identical): Returns true if the operands are equal and of the same type.
 * !== (Not identical): Returns true if the operands are not equal or not of the same type.
 *  (use the identical operator if you want to compare two values with the consideration of type)
 *
 * > (Greater than).
 * < (Less than).
 * >= (Greater than or equal to).
 * <= (Less than or equal to).
 * <=> (Spaceship): Returns -1, 0, or 1 when the left operand is respectively less than, equal to, or greater than the right operand.
 */

echo '<pre>';

$x = 10;    // int
$y = 10.0;  // float

var_dump($x == $y);     // true
var_dump($x != $y);     // false
var_dump($x <> $y);     // false

var_dump($x === $y);    // false
var_dump($x !== $y);    // true

var_dump($x <=> $y);    // 0

echo '</pre>';
