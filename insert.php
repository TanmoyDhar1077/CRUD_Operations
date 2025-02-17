<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];


    $sql = "INSERT INTO students (name, email, roll, registration) VALUES ('$name', '$email', '$roll', '$registration')";
    // Include: the database connection
    require_once('database.php');
    
    $result = $conn->query($sql);
    if (!$result) {
        echo "<scritp>alert('Data Inserted Failed');</script>";
    } else {
        header('Location: index.php');
    }
}


// Include: Insert View File
include_once('./view/insert.view.php');
