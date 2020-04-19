<?php
/**
 * CREATE DATABASE 
 * روییه ای
 */
$serverName ="localhost";
$userName = "root";
$password ="";

$conn = mysqli_connect($serverName,$userName,$password);

if(!$conn){
    die('connection failed : ' . mysqli_connect_error());
}

$sql = "CREATE DATABASE TL_2";

if(mysqli_query($conn,$sql)){
    echo "database is created";
}
else{
    echo "Error";
}
mysqli_close($conn);

mysqli_close($conn);