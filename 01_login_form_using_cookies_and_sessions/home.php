<?php
//  sessions can be used to keep track of whether a user is logged in or not
// Cookies can be used to remember the user's login status between sessions.
session_start();
echo 'welcome to your home page '. $_SESSION['email'] . '<br>';

echo 'click here to <a href="login.php"> login </a>';
echo '<br>';
echo 'click here to <a href="logout.php"> logout </a>';