<?php

/**
 * you can combine several cases in one.
 */
$role = 'author';

switch ($role) {
    case 'admin':
        echo 'Welcome, admin! <br>';
        break;

    case 'editor':
    case 'author':
        echo 'Welcome! Do you want to create a new article? <br>';
        break;

    case 'subscriber':
        echo 'Welcome! Check out some new articles. <br>';
        break;

    default:
        echo 'You are not authorized to access this page <br>';
}
