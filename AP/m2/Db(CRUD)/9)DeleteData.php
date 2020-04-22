<?php
include_once('./config.php');

$connect = new mysqli($severname, $username, $pass, $DBName);

if ($connect->connect_error) {
    die('connection failed : ' . $conn->connect_error);
}

$sql = "DELETE FROM USERS WHERE id=8";

$result = $connect->query($sql);
echo "<pre>";
if($result === true){
    echo "Deleting Id 8";
}else{
    echo "nothing";
}
echo "</pre>";

$connect->close();

?>