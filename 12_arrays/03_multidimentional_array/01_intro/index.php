<?php

/**
 * an element in an array can be another array.
 * Therefore, to define a multidimensional array, you define an array of arrays.
 */

echo '<pre>';

$students = [   // indexed array consists of 4 elements (assosiative arrays)
    [ 'name' => 'Mohamed', 'age' => 19, 'department' => 'CS' ],
    [ 'name' => 'Ahmed', 'age' => 31, 'department' => 'IS' ],
    [ 'name' => 'Hussein', 'age' => 22, 'department' => 'IT' ],
    [ 'name' => 'Mariem', 'age' => 12, 'department' => 'AI' ],
];

print_r($students);

echo $students[0]['name'] . '<pre>';

foreach ($students as $student) {
    // echo $student['name'] . '<br>';
    foreach($student as $key => $detail) {
        echo $key != 'department' ? $key . ' is ' .$detail . ' - ' : $key . ' is ' .$detail . '<br>';
    }
}

echo '</pre>';
