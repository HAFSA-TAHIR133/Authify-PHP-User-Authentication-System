<?php
// create database connection

$server = "localhost";
$username="root";
$password="";
$database="signup_login";

$conn = mysqli_connect($server,$username,$password,$database);
if(! $conn){
    die("connection failed : ").mysqli_connect_error();
}
else{
    // echo "connection successful";
}

?>