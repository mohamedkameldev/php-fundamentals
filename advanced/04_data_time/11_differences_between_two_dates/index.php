<?php

echo '<pre>';

$dob = new DateTime('15-06-2002');
$now = new DateTime();


// diff method returns DateInterval object.
// DateInterval represents the differences between two dates in the year, month, day, hour, etc.
$age = $now->diff($dob);
var_dump($age);

// you can format DateInterval object as following:
echo $age->format('%Y years, %m months, %d days');
// DateInterval Formats: https://www.php.net/manual/en/dateinterval.format.php

echo '<pre>';
