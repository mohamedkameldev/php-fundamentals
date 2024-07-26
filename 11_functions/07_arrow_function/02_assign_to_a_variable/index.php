<?php

echo '<pre>';

$eq = fn ($x, $y) => $x == $y;
var_dump($eq(100, '100'));


$eq = fn ($x, $y) => $x === $y;
var_dump($eq(100, '100'));

echo '</pre>';
