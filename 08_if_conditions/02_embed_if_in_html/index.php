<?php
/**
 * instead of using the traditional syntax,
 * PHP provides a better syntax that allows you to mix the if statement with HTML nicely.
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP if Statement Demo</title>
</head>

<body>
    <?php $is_admin = true; ?>
    <?php if ($is_admin) : ?>
    <a href="#">Edit</a>
    <?php endif // you can put or remove ; from here?>
    <a href="#">View</a>
</body>

</html>