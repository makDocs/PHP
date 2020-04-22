<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get sessions</title>
</head>
<body>
    <?php
        // session_unset();
        // session_destroy();
        echo "\nfname : " . $_SESSION['fname'] ," lname : " . $_SESSION['lname'];


    ?>
</body>
</html>