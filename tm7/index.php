<?php

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "PWEBD";

$conn = new mysqli($server_name, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM users";   
    $result = $conn->query($sql);

    $re
}

$conn->close(); // Remember to close the connection