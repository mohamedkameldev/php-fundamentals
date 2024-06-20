<?php

/**
 * The keys of the indexed array are integers that start at 0.
 * Typically, you use indexed arrays when you want to access the elements by their positions.

 * The keys of an associative array are strings.
 * And you use associative arrays when you want to access elements by string keys.
 *
 * to create an array, there are 2 ways:
 * 1- using array() construct
 * 2- using JSON notation syntax []
 */

function print_array(array $arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

print_array(
    [
        0 => "Sameh",
        "A" => "Ahmed",
        "B" => "Basem",
        "Mahmoud",
        true => "Sayed",
        "1" => "Osama",
        "Gamal",
        9 => "Amera",
        "Eman",
        "Mohamed",
        false => "Asmaa",
        8 => "Haytham",
        "Samer",
    ]
);
