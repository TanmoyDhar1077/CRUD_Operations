<?php
// Define constants for connection parameters
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "student_management");

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
