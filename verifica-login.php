<?php
  session_start();
  $auth_numero_conta = $_SESSION['numero_conta'];
  $auth_nome = $_SESSION['titular1'];
  $auth_saldo = $_SESSION['saldo'];
  if (!isset($auth_numero_conta)){
     header("Location: index.php");
  }
?>
