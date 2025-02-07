<?php


//Fatch data from database
$sql = "SELECT * FROM students";
// Include: the database connection
require_once('./database.php');

$result = $conn->query($sql);
$showData = [];
if ($result->num_rows > 0) {
    $showData = $result->fetch_all(MYSQLI_ASSOC);
}



// Include: the view
include_once('./view/index.view.php');

// Include: view/insert.view.php
// include_once('./view/insert.view.php');

