<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'TestMAK';

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "CREATE TABLE USERS (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(30) COLLATE utf8_persian_ci NOT NULL,USERNAME VARCHAR(40) COLLATE utf8_persian_ci NOT NULL)";

if ($conn->query($sql)) {
    echo "This table is create";
} else {
    echo "ERROR";
}
$conn->close();
