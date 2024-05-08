<?php
    // if the user log out: delete it's credentials 
    session_start();
    session_destroy();

    // there is no way to delete the cookies, 
    // but you can forcely expire them: 
    if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
        setcookie('email', $_COOKIE['email'],  time()-1, '/');
        setcookie('password', $_COOKIE['password'], time()-1, '/');
    }

    echo 'you loggout succesfully <br>';
    echo 'please <a href="login.php"> login again </a> <br>';
?>