<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "abotafah0000";
$db_name = "busnissdb";


try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect! <br>";
}
