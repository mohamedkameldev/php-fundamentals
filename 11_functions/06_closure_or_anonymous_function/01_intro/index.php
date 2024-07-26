<?php

/**
 * Named function:
 *      function with a name, and you can call it multiple times.
 *
 * Anonymous functions:
 *      function that doesn’t have a name.
 *      you need to end it with a semicolon (;) because PHP treats it as an expression.
 *      you need to assign it to a variable and call the function via the variable.
 *      (if you don't assign it to a variable, it will be useless because you can't call it at any place).
 *
 * An anonymous function is a Closure object.
 */


echo '<pre>';

// named function:
function multiplier($x, $y)
{
    return $x * $y;
}
echo multiplier(5, 10) . '<br>';


var_dump(function () {
    echo 'Hello Closures';  // object
});
