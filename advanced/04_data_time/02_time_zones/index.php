<?php

/** you can set timeZone in bootstrap file using this function:
 * date_default_timezone_set('');
*/

date_default_timezone_set('GMT');
// Greenwich Mean Time (GMT) - less commonly used

date_default_timezone_set('UTC');
// Coordinated Universal Time
// widely used as the standard time reference for international timekeeping
// provides a more accurate and stable measure of time.


date_default_timezone_set('Africa/Cairo');
date_default_timezone_set('Asia/Riyadh');
date_default_timezone_set('Asia/Kuwait');
date_default_timezone_set('Asia/Dubai');
date_default_timezone_set('Asia/Qatar');

echo date("Y-m-d H:i:s a");
