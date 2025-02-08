<?php
 // Include: the database connection
 require_once('database.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT status FROM students WHERE id = $id";

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    if ($data['status'] == 1) {
        $sql = "UPDATE students SET status = 0 WHERE id = $id";
        $result = $conn->query($sql);
        header('Location: index.php');
    } else {
        $sql = "UPDATE students SET status = 1 WHERE id = $id";
        $result = $conn->query($sql);
        header('Location: index.php');
    }
}
