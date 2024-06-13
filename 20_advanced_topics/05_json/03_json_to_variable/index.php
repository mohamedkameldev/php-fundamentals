<?php

$person = '{"name": "ahmed", "age": 20}';

$ahmed = json_decode($person);
// this is not an array - this is an object from stdClass
var_dump($ahmed);
