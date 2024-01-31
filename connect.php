<?php

// Connecting to database 
$server = "localhost";
$username = "root";
$password = "";
$database = "bankmangement";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn){
    echo "connected";
}else{
    die("error : ".mysqli_connect_error());}
?>