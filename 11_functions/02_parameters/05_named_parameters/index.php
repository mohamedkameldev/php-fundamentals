<?php

/**
 * Positional Arguments: allow you to pass arguments to a function based on the order of the parameters.
 *
 * Named arguments allow you to pass arguments to a function based on the parameter name.
 *
 * Named arguments can improve code readability and maintainability,
 * especially when dealing with functions that have
 *      -many parameters, -optional parameters, -default values.
 *
 * By using named arguments, you can specify the values for these parameters in any order.
 * Since you are using the parameter names, the positions are not necessary. you can swap the parameters.
 *
 * Important Notes:
 *  - Named Arguments doesn't affect the signature of the function.
 *  - you don't write $ before the name (when passing the argument).
 */

function print_student_details($name, $age, $department = 'CS', $grad_year = '2024')
{
    echo $name .' '. $age .' '. $department .' '. $grad_year . '<br>';
}

print_student_details(department:'IT', grad_year:' 2024', name:'Ahmed', age: 22);


// You can mix positional and named arguments, but positional arguments must come first:
// If you place the named arguments before the positional arguments, you’ll get an error.
print_student_details('Ismaiel', department:'IS', grad_year:'2025', age: 22);


// you can ignore the default parameters values
print_student_details(name:'Mohamed ', age: 22, grad_year:'2022');
