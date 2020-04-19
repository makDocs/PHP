<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'TestMAK';

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "CREATE TABLE REFFER (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(30) COLLATE utf8_persian_ci NOT NULL,USERNAME VARCHAR(40) COLLATE utf8_persian_ci NOT NULL)";

if (mysqli_query($conn,$sql)) {
    echo "This table is create";
} else {
    echo "ERROR";
}
mysqli_close($conn);
