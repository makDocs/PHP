<?php

session_start();

mysql_connect('localhost','root','');
mysql_select_db('MAK');
if(isset($_POST['btn'])){
    if(!empty($_POST['username']) || empty($_POST['password'])){
        $query = "select * from users username='" . $_POST['username'] . "' && password='" . $_POST['password'] . "'";
        $result = mysql_query($query);
        $rowOfNum = mysql_num_rows($result);
        if($rowOfNum>0){
            header('location:pannel.php');
            $_SESSION['Authenticate'] = 1;
            exit;
        }
    }
    else{
        header('location:index.php?empty=404');
        exit;
    }
}