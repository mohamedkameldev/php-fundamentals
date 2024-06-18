<?php


/**
 * When you specify a default argument for a parameter, the parameter becomes optional.
 * It means that you can pass a value or skip it.
 *
 * It's a good practice to place default Parameters after the parameters that don’t have default values.
 * Otherwise, you will get unexpected behavior.
 */

function concat($str1, $str2, $delimiter = ' ')
{
    echo $str1 . $delimiter . $str2 . '<br>';
}

concat('Welcome', 'Mohamed');

concat('Welcome', 'Mohamed', '_');
