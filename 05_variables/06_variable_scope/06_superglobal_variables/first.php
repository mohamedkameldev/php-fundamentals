<?php

/**
 * Superglobal Variables:
 *      A list of built-in variables that supported by PHP.
 *      The superglobal variables provide information about the PHP script’s environment.
 *
 * [$GLOBALS]	Returns an array that contains global variables.
 *      The variable names are used to select which part of the array to access.
 *
 * [$_SERVER]	Returns data about the webserver environment.
 * [$_ENV]	Return information about the script’s environment.
 *
 * [$_GET]	Return data from GET requests.
 * [$_POST]	Return data from POST requests.
 * [$_FILES]	Return data from POST file uploads.
 * [$_REQUEST]	Return data from the HTTP request
 *
 * [$_COOKIE]	Return data from HTTP cookies
 * [$_SESSION]	Return variables registered in a session
 */

$GLOBALS['my_global_variable'] = 'This is my first global variable';

echo '<pre>';

var_dump($GLOBALS);

echo '</pre>';
