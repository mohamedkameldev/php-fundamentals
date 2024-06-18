<?php

$grade = 77;

if($grade >= 85) {
    echo 'Excellent <br>';
} elseif ($grade >= 70) {
    echo 'Very Good <br>';
} elseif ($grade >= 60) {
    echo 'Good <br>';
} elseif ($grade >= 50) {
    echo 'Passed <br>';
} else {
    echo 'Faild <br>';
}

// Note:
// PHP allows you to write else if (in two words) that has the same result as elseif (in a single word)
// but don't do that.
