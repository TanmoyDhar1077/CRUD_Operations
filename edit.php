<?php


if(isset($_GET['id'])){
    
    $id = $_GET['id'];


    $sql = "SELECT * FROM students WHERE id = $id";
    // Include: the database connection
    require_once('database.php');
    $result = $conn->query($sql);
    $editData = $result->fetch_assoc();


    include_once('view/edit.view.php');

}else{
    header('Location: index.php');
    exit();
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];


    $sql = "UPDATE students SET name ='$name', email='$email', roll='$roll', registration='$registration' WHERE id = $id";
    // Include: the database connection
    require_once('database.php');
    $result = $conn->query($sql);
    if (!$result) {
        echo "<scritp>alert('Data Inserted Failed');</script>";
    } else {
        header('Location: index.php');
    }
}








?>