<?php
// Include: the database connection
require_once('./database.php');

//Fatch data from database
$sql = "SELECT * FROM students";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $showData = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $showData = [];
}

//Add new student data to database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $create_at = $_POST['create_at'];
    $update_at = $_POST['update_at'];


    $sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Include: the view
include_once('./view/index.view.php');
