<?php
  session_start();
  $auth_login = $_SESSION['login'];
  $auth_senha = $_SESSION['senha'];
  $auth_id = $_SESSION['id'];
  if (!isset($auth_login)){
     header("Location: login-admin.php");
  }
?>
