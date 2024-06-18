<?php

$cities = ['Cairo', 'Mansoura', 'Alex', 'Giza', 'Aswan'];

$ages = [
    'Mohamed' => 19,
    'Helal' => 21,
    'Mohsen' => 14,
    'Ismail' => 45,
    'Toka' => 24,
    'Laila' => 1,
];



foreach($cities as $city) :
    echo $city . '<br>';
endforeach;

foreach($ages as $name => $age):
    echo $name . " and it's age is <b>" . $age . '</b> <br>';
endforeach;
