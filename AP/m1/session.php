<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION['fname'] = 'mohammad ali';
        $_SESSION['lname'] = 'kazemi'; // geter , Seter

        var_dump($_SESSION);

        echo "\n  Your Session has been saved . ";


        
    
    ?>
    <a href="getSession.php">Sessions</a>
</body>
</html>