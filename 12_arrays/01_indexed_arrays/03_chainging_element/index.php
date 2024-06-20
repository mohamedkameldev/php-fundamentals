<?php


function print_array(array $arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

$arr = [1, 2, 3];
print_array($arr);

// changing array element:
$arr[0] = 0;
print_array($arr);
