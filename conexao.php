<?php
  $conn = new mysqli("localhost", "root", "", "sistemaWebParaBanco");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
