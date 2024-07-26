<?php


/*
 *
 * Assignment Operators:
 *      used to write values to variables.
 *      When evaluating the assignment operator (=),
 *      PHP evaluates the expression on the right side first,
 *      and assigns the result to the variable on the left side.
 *
 *  =   (Assignment).
 *  +=  (Addition assignment).
 *  -=  (Subtraction assignment).
 *  *=  (Multiplication assignment).
 *  /=  (Division assignment).
 *  %=  (Modulus assignment).
 *  **= (Exponentiation assignment).
 *
 *  ^=  (XOR-equal).
 *  &=  (AND-equal).
 *  |=  (OR-equal).
 *  .=  concatenate-equal (look at string operators).
 */

// you can use multiple assignment operators in a single statement
// PHP evaluates the right-most expression first, then runes from right to left.
$x = $y = 20;
echo $x . '<br>';
echo $y . '<br>';
