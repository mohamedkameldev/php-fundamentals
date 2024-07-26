<?php

/**
 * Type Casting: Explicitly convert a value of one type to another.
 *
 * Cast Operators:
 *      (bool) or (boolean)
 *      (int) or (integer)
 *      (real), (double), or (float)
 *      (string)
 *      (array)
 *      (object)
 *      (null)
 */
// Casting to integer:
// float to integer: (convert numbers after floating point to zero)
echo (int)12.5 . '<br>'; // 12
echo (int)12.1 . '<br>'; // 12
echo (int)12.9 . '<br>'; // 12
echo (int)-12.9 . '<br>'; // -12

// string to integer: (if there is no number - convert it to zero)
echo (int) 'Hi' . '<br>'; // 0
echo (int) '100 USD' . '<br>'; // 100

// null to integer: (convert it to zero)
echo (int) null . '<br>'; // 0


// Casting to string:
// integer to string:
echo (string) 100 . ' USD' . '<br>';
echo 100 . ' USD' . '<br>';    // type juggling (implicitly converts the integer to a string)

// boolean to string:
echo (string)true;  // 1
echo (string)false; // "" (empty string)

// null to string:
echo (string)null; // "" (empty string)

// array to string:
echo (string)[1, 2, 3, 4, 5];  // "Array" => warning
