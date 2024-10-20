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
        $oldName = $_POST['oldName'];
        $newName = $_POST['newName'];

        if(!empty($oldName) && !empty($newName)){
            $conn->begin_transaction();

            $check_sql = "SELECT * FROM names WHERE name = '$newName'";
            $check_result = $conn->query($check_sql);

            if($check_result->num_rows > 0){
                $conn->rollback();
                echo "error: Name already exists.";
            } else{
                $sql = "UPDATE names SET name = '$newName' WHERE name = '$oldName'";

                if($conn->query($sql) === TRUE && $conn->affected_rows > 0){
                    $conn->commit();
                    echo "success: Name updated successfully!";
                } else{
                    $conn->rollback();
                    echo "error: Failed to update name or name not found.";
                }
            }
        } else{
            echo "error: Both old and new names must be provided.";
        }
    }
}

$conn->close();
?>
