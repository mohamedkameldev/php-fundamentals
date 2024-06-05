<?php


/**
 * strtotime():
 * parameters: string containing an English date format
 * return: timestamp
 */

print_date(time());
print_date(strtotime("now"));
print_date(strtotime("10 September 2000"));
print_date(strtotime("+1 day"));
print_date(strtotime("+1 week"));
print_date(strtotime("+1 week 2 days 4 hours 2 seconds"));
print_date(strtotime("next Thursday"));
print_date(strtotime("last Monday"));

function print_date(string $date)
{
    echo $date;
    echo '<br>';
}
