<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "formNama";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $sql = "CREATE DATABASE formNama";
        // if($conn->query($sql) === TRUE){
        //     echo "Database created successfully";
        // }else{
        //     echo "Error creating database: " . $conn->error;
        // }

        // $sql = "CREATE TABLE names (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(30) NOT NULL
        // )";
        // if($conn->query($sql) === TRUE){
        //     echo "Table created successfully";
        // }else{
        //     echo "Error creating table: " . $conn->error;
        // }

        $name = $_POST['name'];

        if(!empty($name)){
            $conn->begin_transaction();

            try{
                $check_sql = "SELECT * FROM names WHERE name = '$name'";
                $result = $conn->query($check_sql);

                if($result->num_rows > 0){
                    $conn->rollback();
                    echo "error: Name already exists.";
                } else{
                    $insert_sql = "INSERT INTO names (name) VALUES ('$name')";

                    if($conn->query($insert_sql) === TRUE){
                        $conn->commit();
                        echo "success: Name added successfully!";
                    } else{
                        $conn->rollback();
                        echo "error: Failed to add name.";
                    }
                }
            } catch(Exception $exc){
                $conn->rollback();
                echo "error: Something went wrong. " . $exc->getMessage();
            }

        } else{
            echo "error: Name cannot be empty.";
        }
    }
}

$conn->close();
?>

