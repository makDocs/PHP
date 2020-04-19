<?php
include_once('./config.php');

$connect = new mysqli($severname, $username, $pass, $DBName);

if ($connect->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$statment = $connect->prepare("INSERT INTO USERS (NAME,USERNAME) VALUES (?,?)");
$statment->bind_param("ss" , $name,$userName);

$name = 'mohammadmahdi';
$userName = "Mmkazemi";
$statment->execute();

$name = 'mohammadreza';
$userName = "mr_kazemi";
$statment->execute();

$name = 'farzad';
$userName = "faqhih";
$statment->execute();





$statment->close();
$connect->close();
