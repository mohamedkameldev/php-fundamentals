<?php


/**
 * Variable Variables: a feature in PHP that allows the name of a variable to be determined dynamically.
 * $$ (Variable Variables)
 */


$a = "osama";
$$a = "elzero";
$$$a = "school";
echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $osama;
echo "<br>";
echo $$$a;
echo "<br>";
echo $elzero;
echo "<br>";
echo "Hello {$$a}"; // $$a
// echo "Hello ${$a}"; // $$a    deprecated
echo "<br>";
echo "Hello {$$$a}"; // $$$a
// echo "Hello ${$$a}"; // $$$a  deprecated
