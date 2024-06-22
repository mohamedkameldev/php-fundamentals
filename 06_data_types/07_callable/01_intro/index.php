<?php

/**
 * callable data type refers to a variable that can be called as a function.
 * there are several ways to define a callable:
 * 1- variable function (String containing a function name):
 *      $string_variable_it's_value_is_function_name().
 * 2- Array containing an object and method name:
 *      ['object', 'method'].
 * 3- Array containing a class name and a static method name:
 *      ['class', 'static method'].
 * 4- Anonymous function (closure).
 *
 * used to indicate that a parameter or a return value expects a function or method to be passed or returned.
 *
 * Callables are commonly used in higher-order functions like array operations, sorting, and custom event handling.
 * They provide a way to pass user-defined functions or methods to other functions,
 * such as array_map(), usort(),
 *
 * is_callable(): checks if variable is callable.
 *
 * the reference of the callable function is called: callback;
 */
