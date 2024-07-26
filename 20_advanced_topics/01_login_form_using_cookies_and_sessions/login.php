<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        th {
            text-align: right;
        }

        h3 {
            text-align: center;
        }
    </style>

    <title>Login Form</title>
</head>

<body>

    <table cellpadding="5" cellspacing="10" align="center">
        <h3>Login Form using session and cookies with Remember Me</h3>
        <form method="post" action="validate.php">
            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="email"></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" id="password" name="password"></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="checkbox" name=" remember" value="1">Remember Me
                </td>
            </tr>

            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Login" name="login">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>

<?php
if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
    echo "
    <script>
        document.getElementById('email').value = '{$_COOKIE['email']}';
        document.getElementById('password').value = '{$_COOKIE['password']}';
    </script>
        ";
}
?>