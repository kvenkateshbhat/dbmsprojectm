<?php

$servername = "localhost";
$username = "root";
$password = "nitheeshbhat";
$dbname = "dbms2";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Connection failed";
}

?>