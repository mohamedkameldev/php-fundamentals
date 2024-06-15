<?php

/*
 * To concatenate string with a variable:
 *  01- Dot Operator (.): Basic and most commonly used method for concatenation.
 *
 *  02- Assignment dot operator (.=)
 *
 *  03- String Interpolation/ variable interpolation:
 *       in double-quoted string, PHP replaces the value of any variable that you place inside the string.
 *       Convenient for embedding variables directly within double-quoted strings.
 *
 *  04- Curly Braces: Used within string interpolation for complex variables.
 *
 *  05- sprintf: Used for formatted strings.
 */

$name = 'Ahmed';
$names = ['mohamed', 'ahmed', 'ali'];

// 1-Dot Operator:
echo 'Hello ' . $name . '<br>';
echo "Hello " . $name . "<br>";

// 2-Assignment dot operator:
$full_name = 'Aziz ';
$full_name .= $name;
echo $full_name . "<br>";


// 3-String Interpolation:
echo "Hello $name <br>";


// 4-Curly Braces:
echo "{$names[0]} {$names[1]} {$names[2]} <br>";


// 5-sprintf:
echo sprintf("first name: %s, last name: %d", $names[0], $names[2]);
