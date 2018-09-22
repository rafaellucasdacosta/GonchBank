<?php
  $conn = new mysqli("localhost", "root", "123456", "sistema_banco");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  mysqli_set_charset($conn, "utf8");
?>
