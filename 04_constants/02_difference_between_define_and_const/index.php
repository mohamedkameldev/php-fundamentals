<?php

// The Difference between define() function and const keyword:

/* First:
 * define() function defines a constant at run-time,
 * const keyword defines a constant at compile time.
 */
//-----------------------------------------------------------------------------------------------------------------


/* Second:
 * define can be used within any PHP script, including within functions and loops.
 * const can only be used in the outer scope, not within functions, loops, or conditionals.
 */

if(true) {
    define('WIDTH', '1140px');    // we can do that:

    // const WIDTH = '1140px';       // can't do that
}
//-----------------------------------------------------------------------------------------------------------------


/* Third:
 * define() function allows you to define a constant with the name that comes from an expression
 * For example, the following defines three constants OPTION_1, OPTION_2, and OPTION_3 with the values 1, 2, and 3.
 */

define('PREFIX', 'OPTION');

define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

echo OPTION_1 . "<br>";
echo OPTION_2 . "<br>";
echo OPTION_3 . "<br>";
// However, you cannot use the const keyword to define a constant name derived from an expression.
// Unless you want to define a constant conditionally or use an expression,
// you can use the const keyword to define constants to make the code more clear.
//-----------------------------------------------------------------------------------------------------------------


/* Fourth: (that's deprecated since PHP 8.0)
 * Constants defined using const are always case-sensitive.
 * Constants defined using define can be case-insensitive if specified.
 */
// define('MY_NUM', 10, true);
