<?php
  session_start();
  $auth_nome = $_SESSION['nome'];
  if (!isset($auth_nome)){
     header("Location: login-admin.php");
  }
?>
