<?php

/**
 * an element in an array can be another array.
 * Therefore, to define a multidimensional array, you define an array of arrays.
 */

$students = [
    [ 'name' => 'Mohamed', 'age' => 19, 'department' => 'CS' ],
    [ 'name' => 'Ahmed', 'age' => 31, 'department' => 'IS' ],
    [ 'name' => 'Hussein', 'age' => 22, 'department' => 'IT' ],
    [ 'name' => 'Mariem', 'age' => 12, 'department' => 'AI' ],
];

echo '<pre>';
print_r($students);
echo '</pre>';

foreach ($students as $student) {
    echo $student['name'] . '<br>';
    // foreach($student as $detail) {
    // }
}
