<?php

/**
 * before anything, edit timezone in php ini file to Africa/Cairo
 * ini timezones: https://www.php.net/manual/en/datetime.configuration.php#ini.date.timezone
 * List of Supported Timezones: https://www.php.net/manual/en/timezones.php
*/



/**
 * Unix timestamp is a long integer, contain the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT)
 * to the current(or any specific) second.
*/

/**
 * functions:
 * date(): retrun a date of a specific timestamp (with your desired format).
 * time(): return the current timestamp.
 * mktime(): returns the timestamp of a specific date.
 * strtotime(): returns the timestamp of a string.
 */

/**
 * Classes:
 * DateTime: represents the current date in a specific timezone.
 *          you can set the date and time manually and do multiple manipulations on them.
 *          you can convert string to a date, comparing dates, calculate differences between dates,
 *          adding intervals to a specific date, and more.
 *
 * DateInterval: represents the differences between two dates in the year, month, day, hour, etc.
 *
 */
