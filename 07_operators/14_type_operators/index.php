<?php


/*
 * Type Operators: used to check or change the type of a variable.
 *
 * instanceof: Determines if an object is an instance of a specified class or interface.
 */

namespace lib\MyClasses;

class Student
{
}
$ahmed = new Student();

if($ahmed instanceof Student) {
    echo 'this is a valid type <br>';
} else {
    echo 'this is invalid type <br>';
}
//---------------------------------------------------


// ::class constant provides a way to get the fully qualified name of a class as a string,
// This is particularly useful for namespaced classes.
echo Student::class;  // lib\MyClasses\Student
