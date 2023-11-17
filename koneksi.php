<?php

$hostName = "localhost";    
$userName = "root";         
$password = "";             
$dbName   = "toko-atk"; 
$conn = new mysqli($hostName, $userName, $password, $dbName);  

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection successful";
}

?>