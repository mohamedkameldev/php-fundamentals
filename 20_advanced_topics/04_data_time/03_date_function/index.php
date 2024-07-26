<?php
/**
 * date():
 * parameters: desired format, timestamp (of the wanted date)
 * if you don't pass any timestamp, it will use the current timestamp(time())
 */

print_date(date("H"));                              // hours: 15
print_date(date("h"));                              // hours: 03     // with leading 0
print_date(date("G"));                              // hours: 15
print_date(date("g"));                              // hours: 3      // without leading 0

print_date(date("i"));                              // minutes: 26

print_date(date("s"));                              // seconds: 56

print_date(date("a"));                              // am | pm


print_date(date("l"));                              // Wednesday
print_date(date("D"));                              // Wed
print_date(date("d"));                              // 05
print_date(date("j"));                              // 5              // without leading 0

print_date(date("m"));                              // 06
print_date(date("n"));                              // 6              // without leading 0
print_date(date("M"));                              // Jun
print_date(date("F"));                              // June

print_date(date("y"));                              // 24
print_date(date("Y"));                              // 2024

print_date(date("T"));                              // Time zone abbreziation

print_date(date("c"));                              // current date and time in ISO 8601 format
// ISO 8601 format is a standardized representation of date and time, usually used in APIs.
// (YYYY-MM-DDTHH:MM:SS±hh:mm)
// T is a separator indicating the start of the time component.
// ±hh:mm represents the timezone offset from Coordinated Universal Time (UTC)


print_date('-------------------Examples:------------------');
// add [S] after any char to add [th]
// add \ before any char to print it as it is
print_date(date("Y-m-d H:i:s"));                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

print_date(date('l jS \of F Y h:i:s A'));          // Wednesday 5th of June 2024 04:17:38 AM

print_date(date('\i\t \i\s \t\h\e jS \d\a\y.'));   // it is the 10th day.


function print_date(string $date)
{
    echo $date;
    echo '<br>';
}
