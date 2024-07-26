<?php


function print_array(array $arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

$arr = [1, 2, 3];
print_array($arr);

// Adding an element to the array: $array_name[] = new_element;
// PHP will calculate the highest numerical index plus one each time you assign an element to the array.
$arr[] = 4;
print_array($arr);


// or you can add the index manually:
$arr[4] = 5;
print_array($arr);
