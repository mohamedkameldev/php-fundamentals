<?php

$date1 = new DateTime('01-12-2000 00:00:01');
$date2 = new DateTime('01-12-2000 00:00:00');



var_dump($date1 < $date2);      // true
echo '<br>';
var_dump($date1 > $date2);      // false
echo '<br>';
var_dump($date1 <= $date2);     // true
echo '<br>';
var_dump($date1 >= $date2);     // false
echo '<br>';
var_dump($date1 == $date2);     // false
echo '<br>';
var_dump($date1 <=> $date2);    // -1 or 0 or 1 (all operators)
echo '<br>';
