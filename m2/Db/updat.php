<?php
include_once('./config.php');

$connect = new mysqli($severname, $username, $pass, $DBName);

if ($connect->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "UPDATE USERS set USERNAME='mahdi2004' WHERE id=7";

$result = $connect->query($sql);
echo "<pre>";
if($result === true){
    echo "Updated Id USERNAME";
}else{
    echo "nothing";
}
echo "</pre>";

$connect->close();

?>