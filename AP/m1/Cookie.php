<!DOCTYPE html>
<?php
    $cookie_name = 'Test';
    $cookie_value = 'yes';
    setcookie($cookie_name,$cookie_value,time()+(86400*20));
    // setcookie($cookie_name,$cookie_value,time() - (86400*20)); // Delete cookie



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    
</body>
</html>