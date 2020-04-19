<?php
include_once('./config.php');

$connect = mysqli_connect($severname, $username, $pass, $DBName);

if (!$connect) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "SELECT id,NAME,USERNAME FROM USERS";

$result = mysqli_query($connect,$sql);
echo "<pre>";
if(mysqli_num_rows($result)){
    while( $row = mysqli_fetch_assoc($result)){
        echo "id : ". $row['id'] . "<br>Name : ". $row['NAME'] . "<br>User Name : " . $row['USERNAME'] ."<br>";
    }
}
echo "</pre>";

$connect->close();

?>