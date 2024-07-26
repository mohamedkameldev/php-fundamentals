<?php

$myEmail = 'mohamed@gmail.com';
$myPassword = '1234';

if (isset($_POST['login'])) {
    if (($_POST['email'] == $myEmail and $_POST['password'] == $myPassword)
        or
        ($_POST['email'] == $myEmail and password_verify($myPassword, $_COOKIE['password']))
    ) {
        echo 'Valid Credentials';
        if ($_POST['remember']) {
            // set the cookies for one day from now in the traditional cookies path in the browser.
            // inspect -> application -> cookies    
            setcookie('email', $_POST['email'], time() + (60 * 60 * 24), '/');

            // here we set the password in cookies as it is:
            // setcookie('password', $_POST['password'], time() + (60 * 60 * 24), '/');

            // here we hash the password then set it in the cookies:
            setcookie('password', password_hash($_POST['password'], PASSWORD_DEFAULT), time() + (60 * 60 * 24), '/');
            // PASSWORD_DEFAULT hashs the password with bcrypt algorithm
        }

        session_start();
        $_SESSION['email'] = $_POST['email'];
        header('location: home.php');
    } else {
        echo 'Invalid Credintials, please <a href="login.php"> login again </a>';
    }
} else {
    header('location: login.php');
}
