<?php


/*
 * Logical Operators: used to combine conditional statements.
 *
 * && (And).
 * || (Or).
 * ! (Not).
 *
 * and (And): Lower precedence and operator.
 * or (Or): Lower precedence or operator.
 * xor (Xor): Returns true if either operand is true, but not both.
 */

/** Notes:
 * for the and operators (&& , and):
 * If the first operand is false, it will not evaluate the second operand,
 * because it knows for sure that the result is going to be false. This is known as short-circuiting.
 *
 * for the or operators (|| , or):
 * If the first operand is true, it will not evaluate the second one. This is known as short-circuiting.
*/

echo '<pre>';

// $debug = true;      // will print the message - then $result = true
$debug = false;     // will not print this message - $result = false
$result  = $debug && print('PHP and operator demo!');
var_dump($result);


//-----------------------------------------------------------------------------
function connect_to_db()
{
    return true;    // will not perform die function and continue excecution.
    return false;   // will end the program.
}

connect_to_db() || die('Cannot connect to the database.');


//-----------------------------------------------------------------------------
$result = false or true;  // false (= has high precedence than or)
var_dump($result);

$result = false || true;  // true (|| has high precedence than =)
var_dump($result);


//-----------------------------------------------------------------------------
$is_connected = true;
var_dump(! $is_connected);


echo '<pre>';
