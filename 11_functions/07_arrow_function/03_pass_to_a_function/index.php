<?php

$arr = [10, 20, 30];

$arr2 = array_map(fn ($item) => $item * 2, $arr);

print_r($arr);
print_r($arr2);
