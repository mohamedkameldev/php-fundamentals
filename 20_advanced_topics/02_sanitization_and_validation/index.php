<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>

    <!-- 
        <?php
        // foreach ($_SERVER as $key => $value) {
        //  echo $key . ' = ' . $value . '<br>';
        // }
        ?> 
    -->

    <!-- <form action="index.php" method="post"> -->
    <!-- <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"> -->
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <!-- use this function to avoid cross site script vulnarabilities -->

        <center>
            <input type="text" name="username" placeholder="Enter your user name">
            <br>
            <br>

            <input type="text" name="age" placeholder="Enter your age">
            <br>
            <br>
            <input type="text" name="email" placeholder="Enter your email">
            <br>
            <br>
            <input type="submit" name="submit">
        </center>
    </form>
</body>

</html>

<?php

// if (isset($_POST['submit'])) {
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "hello  {$_POST['username']}";
    // if you don't sanitize data, it can danger your website
    // imagine that user enter this value: <script> alert('you are hacked'); </script>
    // then you should sanitize or validate the input files before printing or storing them

    // SANITIZATIZING CHARS:
    // $userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    // sanitization: any special chars will be replaced, open the view page source file
    // echo "hello,  {$userName}";

    // SANITIZATIZING NUBERS:
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    // echo "your age is:  {$age}";

    // SANITIZATIZING EMAILS:
    // $email = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    // echo "your email is:  {$userName}";
    //----------------------------------------------------------------------------------------



    // VALIDATING NUBERS:
    // $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    // if there are any non-numeric chars, it will return nothing
    // echo empty($age) ? 'Invalid number' : "your age is:  {$age}";

    // VALIDATING EMAILS:
    // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // if there are any non-numeric chars, it will return nothing
    // echo empty($email) ? 'Invalid email' : "your email is:  {$email}";
}

// sanitization:هتعملها تعقيم وتنقيه ثم ترجع الباقي السليم 
//         FILTER_SANITIZE_SPECIAL_CHARS
//         FILTER_SANITIZE_NUMBER_INT
//         FILTER_SANITIZE_EMAIL

// validation: لو مش بيتبع القواعد مش هترجع حاجه منه
//     more strict than sanitization

//         FILTER_VALIDATE_INT
//         FILTER_VALIDATE_EMAIL
