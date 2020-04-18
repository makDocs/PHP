<?php
include_once('./config.php');

$connect = new mysqli($severname, $username, $pass, $DBName);

if ($connect->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "SELECT id,NAME,USERNAME FROM USERS";

$result = $connect->query($sql);
echo "<pre>";
if($result->num_rows > 0){
    while( $row = $result->fetch_assoc()){
        echo "id : ". $row['id'] . "<br>Name : ". $row['NAME'] . "<br>User Name : " . $row['USERNAME'] ."<br>";
    }
}
echo "</pre>";

$connect->close();

?>