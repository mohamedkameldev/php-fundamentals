<?php

echo '<pre>';

// $date = '06/10/2005';  // m/d/Y
$date = '06-10-2005';  // d-m-Y
$my_date = new DateTime($date);
print_r($my_date);
//  when you pass a date string without the time, the DateTime() constructor uses midnight time.



$date = '06/10/2005';
$my_date = DateTime::createFromFormat('d/m/Y', $date);
print_r($my_date);
// when you pass a date string without the time, the createFromFormat() method uses the current time.

echo '</pre>';
