<?php

/*
 * escape characters: \n, \r, \t, \ and any special character after it.
 * escape characters doesn't work with ''.
 */
echo '<pre>';
echo 'Hello World' . '<br>';          // Hello World

echo "Hello World" . '<br>';          // Hello World

echo "Hello 'World'" . '<br>';        // Hello 'World'

echo 'Hello "World"' . '<br>';        // Hello "World"

echo 'Hello \'World\'' . '<br>';      // Hello 'World'

echo "Hello \"World\"" . '<br>';      // Hello "World"

echo "Hello World\\" . '<br>';        // Hello World\

echo "Hello \t World" . '<br>';

echo "Hello \n World" . '<br>';

echo "Hello \r World" . '<br>';

echo 'Hello \n World' . '<br>'; // doesn't work

echo '</pre>';
