<?php

echo '<pre>';

// DateTime + DateInterval
$now = new DateTime();
$added_interval = new DateInterval('P1Y2M');
// DateInterval Formats: https://www.php.net/manual/en/dateinterval.format.php


$now->add($added_interval);
var_dump($now);

echo '</pre>';
