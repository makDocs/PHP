<?php

require_once('./config.php');

$connect = new mysqli($severname,$username,$pass,$DBName);

if($connect->connect_error){
    die('connection failed : ' . $conn->connect_error);
}

$sql = "INSERT INTO USERS (NAME,USERNAME) VALUES ('mohammadali','Ma_kazemi');";
$sql .= "INSERT INTO USERS (NAME,USERNAME) VALUES ('farzad','fdz');";

// if($connect->query($sql)){
//     echo "User has been saved.";
// } 

if($connect->multi_query($sql)){
    echo "User has been saved.";
}
else{
    echo 'error';
}

$connect->close();