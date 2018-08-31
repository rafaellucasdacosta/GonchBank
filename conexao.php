<?php
  $conn = new mysqli("localhost", "root", "", "sistemawebparabanco");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
