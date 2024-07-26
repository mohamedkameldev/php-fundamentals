<?php


$score = 75;

$result = ($score >= 90) ? 'A' : (($score >= 80) ? 'B' : (($score >= 70) ? 'C' : 'F'));
// خد بالك من الأقواس

echo $result; // Outputs: C
