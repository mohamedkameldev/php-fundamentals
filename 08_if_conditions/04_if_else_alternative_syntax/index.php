<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP if-else Statement Demo</title>
</head>

<body>
    <?php $is_authenticated = false // you can put ; or remove it?>
    <?php if ($is_authenticated) : ?>
    <a href="#">Logout</a>
    <?php else: ?>
    <a href="#">Login</a>
    <?php endif ?>
</body>

</html>