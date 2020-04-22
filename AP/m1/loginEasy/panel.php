<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['uname'] ?></title>
</head>
<body>
    <?php

        if(isset($_SESSION['uname'])){
            echo $_SESSION['uname'];
            session_unset();
            session_destroy();
           
            // <p>Welcome To mak Site . </p>


        }else{
            header("location:form.php");
            exit;
        }
    
    ?>
</body>
</html>

