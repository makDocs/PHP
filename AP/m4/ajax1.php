<?php

require_once('./config.php');

$conn = new mysqli($severname,$username,$password,$DBName);

if($conn->connect_error){
    die('connection failed : ' . $conn->connect_error);
}

$sql = "SELECT username,email FROM users";

$result = $conn->query($sql);
$arr =array();
if($result->num_rows > 0){
    while( $row = $result->fetch_assoc()){
        // echo "<pre>User Name : " . $row['username'] ."<br>" . "email : " .$row['email'] .'</pre>';
        array_push($arr,array(
            'username' => $row['username'],
            'email'=> $row['email']
        ));
    }
}
// var_dump(json_encode($arr));
echo json_encode($arr);




// $stm->close();
$conn->close();