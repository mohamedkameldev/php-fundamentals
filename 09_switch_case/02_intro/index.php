<?php

/**
 * When the value of a single variable specifies the number of different choices,
 * it’s much cleaner to use the switch statement.
 */

$day = 'Blabladay';

switch($day) {
    case 'Saturday':
        echo '1 <br>';
        break;
    case 'Sunday':
        echo '2 <br>';
        break;
    case 'Monday':
        echo '3 <br>';
        break;
    case 'Tuesday':
        echo '4 <br>';
        break;
    case 'Wednesday':
        echo '5 <br>';
        break;
    case 'Thursday':
        echo '6 <br>';
        break;
    case 'Friday':
        echo '7 <br>';
        break;
        // default:
        // echo 'This is not a day of the week <br>';

}


// In case the default is not specified, and there’s no match, the control is passed to the statement that follows the switch statement.
echo 'after switch statement <br>';
