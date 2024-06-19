<?php


/*
 * The scope of a variable is the context within which it is defined (page or block of code).
 * if you want to use a variable in another page, you must require it in this page
 */

const NAME = 'Mohamed';

$x = 15;
require 'home.php';
// Here the $x variable will be available within the included home page.
// However, in header page it will be undefined variable.
