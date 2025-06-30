<?php

$host='localhost';
$user='root';
$pass='';
$db='login';

$conn=mysqli_connect($host,$user,$pass,$db);

if($conn->connect_error){
    echo "failed to connect to DB: " . $conn->connect_error;
}


?>