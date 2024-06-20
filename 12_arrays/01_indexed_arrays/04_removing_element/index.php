<?php


function print_array(array $arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

$arr = [1, 2, 3];
print_array($arr);


// removing array element:
unset($arr[1]);
print_array($arr);

$arr[] = 1;
print_array($arr);
