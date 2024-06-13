<?php


$names = ['mohamed', 'ahmed', 'ali', 'hussein'];
$ages = ['mohamed' => 12, 'ahmed' => 20, 'ali' => 15, 'hussein' => 33];

$json_names = json_encode($names);
$json_ages = json_encode($ages);


header('Content-type:application/json'); //setting the content type of the document to appplication/json using the header() function
// echo $json_names;
echo $json_ages;
