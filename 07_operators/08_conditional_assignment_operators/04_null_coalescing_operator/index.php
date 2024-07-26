<?php

/*
 * Null coalescing: (isset())
 *
 *      $variable = $value_if_not_null ?? $default_value;
 *
 * Output = Expression if it exists and not null
 * (even it was = false, it will be assigned to the RHS).
 */

// $is_auth is not existed
echo $is_auth ?? 'not authenticated <br>';


$is_auth = null; // null
echo $is_auth ?? 'not authenticated <br>';


$is_auth = false; // false
echo $is_auth ?? 'not authenticated <br>';

$is_auth = 'yes'; // true value
echo $is_auth ?? 'not authenticated <br>';
