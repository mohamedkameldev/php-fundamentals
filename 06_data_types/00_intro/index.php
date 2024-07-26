<?php
/*
 * A type specifies:
 *      - the amount of memory that contains the value.
 *      - the operations that you can perform on it.
 *
 * During declaring a variable, PHP does not support specifying the type of it directly,
 * you can specify the variable type (also known as type hints) for:
 * function parameters, return values, and class properties.
 *
 * PHP has ten primitive types including 4 scala types, 4 compound types, and 2 special types:
 * Scalar types: (contain single value)
 *      - bool - int - float - string
 * Compound types: (contain more than one value)
 *      - array - object - callable - iterable
 * Special types:
 *      - resource - null
 * Others:
 *      - mixed: Represents multiple possible types
 *      - number: Represents integer or float
 *      - void: Represents a function that does not return a value
 *
 * gettype() function: This function returns the type of a variable as a string.
 */
