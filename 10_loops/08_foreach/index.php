<?php

/**
 * using foreach: you don’t need to know the number of elements in an array upfront.
 *
 * When PHP encounters a foreach statement,
 * it assigns the first element of the array to the variable following the as keyword ($element).
 * In each iteration, PHP assigns the next array element to the $element variable.
 * If PHP reaches the last element, the loop ends.
 */
$cities = ['Cairo', 'Mansoura', 'Alex', 'Giza', 'Aswan'];

$ages = [
    'Ahmed' => 19,
    'Morad' => 21,
    'Malak' => 14,
    'Ismail' => 45,
    'Toka' => 24,
    'Laila' => 1,
];



foreach($cities as $city) {
    echo $city . '<br>';
}

foreach($ages as $name => $age) {
    echo $name . " and it's age is <b>" . $age . '</b> <br>';
}
