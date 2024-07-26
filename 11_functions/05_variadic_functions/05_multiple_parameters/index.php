<?php


// If a function has multiple parameters, only the last parameter can be variadic.
// If you place the variadic parameter before a regular one, you’ll get an error.


function print_details($name, $age, ...$grades)
{
    echo 'Name = '. $name . ', and age = ' . $age . ', with grades: ';
    foreach($grades as $grade) {
        echo $grade . ', ';
    }
    echo '<br>';
}


print_details('Toto', 21, 75, 81, 95, 62);
print_details('Mohamed', 32, 100, 100, 100, 100, 100, 100, 100, 100);
