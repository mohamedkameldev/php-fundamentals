<?php

/*
 * World provides you with 4 ways to define a literal string:
 * single-quoted, double-quoted, heredoc syntax and nowdoc syntax.
 *
 * The good practice is to use single-quoted strings when you don’t use variable interpolation,
 * because PHP doesn’t have to parse and evaluate them for double-quoted strings.
 *
 * A string has a zero-based index,
 * $str[0] = first character in the string.
 * $str[-1] = last character in the string.
 *
 * strlen(): Getting the length of a string.
 *
 * nl2br(): print the string with the newlines in it.
 */

$str = 'Hello World';
echo $str[0] . '<br>';
echo $str[-1] . '<br>';

echo strlen($str) . '<br>';


echo 'Hello World
 On Multiple
 Lines' . '<br>';               // Hello World On Multiple Lines

echo nl2br('Hello World 
 On Multiple
 Lines' . '<br>');              // nl2br = every newline in my string, print it as <br>
