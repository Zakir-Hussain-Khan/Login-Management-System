<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "users";
$conn = new mysqli($hostname, $username, $password, $database);
if(!$conn){
    die("Failed to connect");
}
?>