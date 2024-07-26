<?php

echo '<pre>';

$students = [
    [ 'name' => 'Mohamed', 'age' => 19, 'department' => 'CS' ],
    [ 'name' => 'Ahmed', 'age' => 31, 'department' => 'IS' ],
    [ 'name' => 'Hussein', 'age' => 22, 'department' => 'IT' ],
    [ 'name' => 'Mariem', 'age' => 12, 'department' => 'AI' ],
];

print_r($students);

// removing array element:
unset($students[2]);

print_r($students);
// Note that the unset() function doesn’t change the array’s keys.
// To reindex the key, you can use the array_splice() function.

echo '</pre>';
