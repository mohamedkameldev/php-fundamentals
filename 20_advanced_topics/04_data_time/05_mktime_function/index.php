<?php

// mktime function:
// Returns the Unix timestamp corresponding to the arguments given.
// mktime(hour, minute, second, month, day, year)

echo(mktime(0, 0, 0, 06, 14, 2002));

// you can use it to find the day of that date:
echo(date("l", mktime(0, 0, 0, 06, 14, 2002)));
