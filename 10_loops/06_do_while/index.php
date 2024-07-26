<?php


/**
 * In do-while loop:
 * PHP evaluates the expression at the end of each iteration.
 * That means the loop always executes (at least once), even the expression is false before the loop enters.
 */


do {
    echo 'the serial number is ' . rand(10000, 99999);
} while (false);
