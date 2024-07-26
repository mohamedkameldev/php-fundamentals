<?php

/**
 * callable data type or variable function
 *  variable that can be called as a function.
 *
 * there are several ways to define a callable:
 *  1- variable function (String containing a function name).
 *  2- Array containing an object and method name.
 *  3- Array containing a class name and a static method name.
 *  4- Anonymous function (closure).
 *
 *
 * Callables are commonly used in higher-order functions like array operations, sorting, and custom event handling.
 * They provide a way to pass user-defined functions or methods to other functions,
 * such as array_map(), usort(),
 *
 * used to indicate that a parameter or a return value expects a function or method to be passed or returned.
 *
 * is_callable(): checks if variable is callable.
 *
 * the reference of the callable function is called: callback;
 */
