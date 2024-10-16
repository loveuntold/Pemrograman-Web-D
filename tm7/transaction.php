<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "transactions";  

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}else{
    // $sql = "CREATE DATABASE transactions";
    // if($conn->query($sql) === TRUE){
    //     echo "Database created successfully";
    // }else{
    //     echo "Error creating database: " . $conn->error;
    // }

    // $sql = "CREATE TABLE transaksi (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     user VARCHAR(50) NOT NULL,
    //     umur INT NOT NULL
    // )";


    // if($conn->query($sql) === TRUE){
    //     echo "Table created successfully";
    // }else{
    //     echo "Error creating table: " . $conn->error;
    // }

    $conn->begin_transaction();

    try{
        $sql = "INSERT INTO transaksi (user, umur) VALUES ('John', 25)";
        $conn->query($sql);

        $sql = "INSERT INTO transaksi (user, umur) VALUES ('Doe', 30)";
        $conn->query($sql);

        $conn->commit();
        echo "New records created successfully";
    }


}
$conn->close();
