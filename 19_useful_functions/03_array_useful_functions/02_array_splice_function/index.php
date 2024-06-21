<?php

/**
 * array_splice():
 * used to remove a portion of an array and replace it with something else.
 * you can use it to remove some elements (by replacing them with nothing).
 * It operates directly on the array passed to it, modifying the original array.
 * returns an array with the removed elements.
 *
 * Parameters:
 * array: the target array.
 * start: starting point in the array to begin splicing.
 *      (-1) means the last element, (-2) means the second last element, and so on.
 * length: number of elements to remove from the array.
 *      If not specified, all elements from the offset to the end of the array will be removed.
 *      If this value is set to a negative number, the function will stop that far from the last element.
 * replacement: An array or a single value to replace the removed elements.
 *      If not specified, no elements will be added.
 *      If it's only one element, it can be a string, and does not have to be an array.
 *
 * Return Value:
 * returns the array consisting of the extracted elements
 */

// echo '<pre>';

$a1 = ["a" => "red","b" => "green","c" => "blue","d" => "yellow"];
$a2 = ["a" => "purple","b" => "orange"];

// $a3 = array_splice($a1, 0, 2, $a2); // شيل من أول عنصر، عنصرين، وبدلهم بعناصر الأرراي التانيه دي
// print_r($a1); // [[0] => purple [1] => orange [c] => blue [d] => yellow]
// print_r($a3);


// $a3 = array_splice($a1, 1, 2, 'not a color');
// print_r($a1);   // [[a] => red [0] => not a color [d] => yellow ]
// print_r($a3);   // [[b] => green [c] => blue]


// If the function does not remove any elements (length=0),
// the replaced array will be inserted from the position of the start parameter
// array_splice($a1, 1, 0, $a2);
// print_r($a1);   // [[a] => red [0] => purple [1] => orange [b] => green [c] => blue [d] => yellow )]

// echo '</pre>';
