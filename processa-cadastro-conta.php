<?php
header( 'content-type: text/html; charset=utf-8' );
include_once("conexao.php");

session_start();

$tipo_conta = $_SESSION['tipo_cliente'];
$titular1 = $_POST['titular1'];
$cpf_titular1 = $_POST['cpf_titular1'];
$titular2 = $_POST['titular2'];
$cpf_titular2 = $_POST['cpf_titular2'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];
$saldo = $_POST['saldo'];

$sql = "INSERT INTO contas (tipo_conta, titular1, cpf_titular1, titular2, cpf_titular2, senha, saldo)
  VALUES ('$tipo_conta','$titular1','$cpf_titular1','$titular2','$cpf_titular2','$senha', '$saldo')";
  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Conta Criada!');window.location.href='saldo.php';</script>";
  }
  else{
    echo "erro";
  }

?>
