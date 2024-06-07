<?php

echo '<pre>';

// set DateTime - simple way (using the constructor)
$my_date = new DateTime($datetime = '12-12-1912 12:12:12 pm');
var_dump($my_date);

// set DateTime - advanced way (using methods)
$my_date = new DateTime();
$time_zone = new DateTimeZone('America/Los_Angeles'); // you can use Anonymous class instead of that
$my_date->setDate(2000, 04, 16)->setTime(15, 30, 45)->setTimezone($time_zone); // use them lonely, or chain them
var_dump($my_date);

echo $my_date->format('l jS \of F Y h:i:s A');

echo '</pre>';
