<?php
  $conn = new mysqli("localhost", "root", "123456", "db_pa3");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  mysqli_set_charset($conn, "utf8");
?>
