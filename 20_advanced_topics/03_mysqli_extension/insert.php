<?php
require_once('database.php');

$user_name = 'ahmed';
$password = '1234';

$hashed_pass =  password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (name, password)
                    VALUES ('$user_name', '$hashed_pass')";

try {
    mysqli_query($conn, $query);
} catch (mysqli_sql_exception) {
    echo 'we cannot do that';
}

mysqli_close($conn);
