<?php

echo '<pre>';

$students = [
    [ 'name' => 'Mohamed', 'age' => 19, 'department' => 'CS' ],
    [ 'name' => 'Ahmed', 'age' => 31, 'department' => 'IS' ],
    [ 'name' => 'Hussein', 'age' => 22, 'department' => 'IT' ],
    [ 'name' => 'Mariem', 'age' => 12, 'department' => 'AI' ],
];


print_r($students);


// Adding an element to the array: $array_name[] = new_element; new_element is an array
// PHP will calculate the highest numerical index plus one each time you assign an element to the array.
$students[] = ['name' => 'Barakat', 'age' => 51, 'department' => 'Electricity'];

// or you can add the index manually:
$students[5] = ['name' => 'Reyad', 'age' => 48, 'department' => 'SWE'];


print_r($students);

echo '</pre>';
