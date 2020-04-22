<?php

require_once('./config.php');

// $objs= "[table:'users',limit:'2']";
class A{
    public $table = 'users';
    public  $limit = '2';
    
}
// $obj = json_decode($objs,false);// true => array , false => obj
// var_dump($obj);
$conn = new mysqli($severname,$username,$password,$DBName);

if($conn->connect_errno){
    die('connection failed : ' . $conn->connect_error);
}
$a = new A();
$stmt = $conn->prepare("SELECT username,email FROM $a->table LIMIT ?");
$stmt->bind_param('s',$a->limit);
$stmt->execute();

$result = $stmt->get_result();

$otp = $result->fetch_all();

echo json_encode($otp);

// $stm->close();
$conn->close();