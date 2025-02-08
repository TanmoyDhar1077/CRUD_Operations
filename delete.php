<?php
require_once('database.php');

// delete data from database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id = $id";
    $result = $conn->query($sql);
    if (!$result) {
        echo "scritp>alert('Data Deleted Failed');</script>";
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
    exit();
}

?>