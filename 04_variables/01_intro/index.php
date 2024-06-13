<?php

/*
 * variable stores a value of any type (string, number, array, object).
 *
 * variable naming rules:
 *      - The variable name must start with the dollar sign ($).
 *      - The first character after the dollar sign ( $) must be a letter (a-z) or the underscore ( _ ).
 *      - The remaining characters can be underscores, letters, or numbers.
 *
 * PHP variables are case-sensitive ($message != $Message).
 *
 * Use the separation of concerns principle (SOC) to separate the PHP logic from HTML.
 */

$title = "Hello World";
require 'index.view.php';
