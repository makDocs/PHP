<?php
    session_start();
if(isset($_POST['submit'])){
    // echo 'submites';

    if(!Validations($_POST['uname']) || !Validations($_POST['password'])){
        header("location:form.php?empty=please insert in form !!");
        exit;
    }
    if($_POST['uname'] =='mak' && $_POST['password'] == '123' ){
        $_SESSION['uname'] = $_POST['uname'];
        echo 'set';
        header("location:panel.php");
        exit;
    }
    else{
        header("location:form.php?wrong=wrong value");
        exit;
    }

}
else{
    header("location:form.php?wrong=Permission denid");
    exit;
}
function Validations($data){
    if(isset($data) && !empty($data)){
        return true;
    }
    return false;
}
