<?php
/**
 * CREATE DATABASE 
 * شی گرایی
 */
$serverName ="localhost";
$userName = "root";
$password ="";

$conn = new mysqli($serverName,$userName,$password);

if($conn->connect_error){
    die('connection failed : ' . $conn->connect_error);
}

$sql = "CREATE DATABASE TestMAK";

if($conn->query($sql) === true){
    echo "database is created";
}
else{
    echo "Error";
}
$conn->close();
