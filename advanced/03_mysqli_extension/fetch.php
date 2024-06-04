<?php
require_once('database.php');

// $query = "SELECT * FROM users WHERE name = 'mohamed' ";
$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {     // how many rows returns in the result
    while ($row = mysqli_fetch_assoc($result)) {  // convert the row (which is object) to an associative array
        echo $row['id'] . '<br>';
        echo $row['name'] . '<br>';
        echo $row['password'] . '<br>';
        echo $row['reg_date'] . '<br>';
        echo '----------------------------------------------------------------------------------------------------<br>';
    }
}   

mysqli_close($conn);
