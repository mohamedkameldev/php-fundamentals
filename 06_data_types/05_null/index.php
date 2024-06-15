<?php

/**
 * The null (type) has (one value) called null, which represents a variable with no value.
 * null indicates the absence of a value for a variable.
 *
 * PHP keywords are case-insensitive. Therefore (null = Null = NULL).
 * But it’s a good practice to keep your code consistent.
 * If you use null in the lowercase in one place, you should also use it in your whole codebase.
 *
 * To test if a variable is null:
 *      is_null()
 *      === null (identical operator)
 *
 * خلي بالك، نوع المتغير أصلا بنال، مش بس قيمته
 */
echo '<pre>';
$name = null;
$age = 21;


var_dump($name); // null (it's data type is null)

var_dump(is_null($name));
var_dump(is_null($age));

var_dump($name === null);
var_dump($age === null);

echo '</pre>';
