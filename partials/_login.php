<?php

include("_dbconnect.php");

if(isset($_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['login']=true;
}

?>