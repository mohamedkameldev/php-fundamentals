<?php

/**
 * Variable Variables: a feature in PHP that allows the name of a variable to be determined dynamically.
 * $$ (Variable Variables)
 */


$a = "osama";
$$a = "elzero";
$$$a = "school";

echo $a . '<br>';       // osama

echo $$a . '<br>';      // elzero

echo $osama . '<br>';   // elzero

echo $$$a . '<br>';     // school

echo $elzero . '<br>';  // school

echo "Hello {$$a} <br>"; // $$a = Hello elzero
// echo "Hello ${$a}"; // $$a    (deprecate)

echo "Hello {$$$a} <br>"; // $$$a = Hello school
// echo "Hello ${$$a}"; // $$$a  (deprecated)
