<?php

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
