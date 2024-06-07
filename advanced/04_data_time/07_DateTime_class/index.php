<?php

echo '<pre>';

$my_date = new DateTime();
print_r($my_date);

// set timezone (using constructor)
$my_date = new DateTime($timezone = 'Asia/Riyadh');
print_r($my_date);

// set timezone (using constructor | Anonymous Class)
$my_date = new DateTime('now', new DateTimeZone('Asia/Kuwait'));
print_r($my_date);

// set timezone (using method | Anonymous Class)
$my_date = new DateTime();
$my_date->setTimezone(new DateTimeZone('Asia/Dubai'));
print_r($my_date);


echo '</pre>';
