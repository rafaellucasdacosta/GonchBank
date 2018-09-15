<?php
header( 'content-type: text/html; charset=utf-8' );
include_once("conexao.php");

session_start();

$agencia = $_POST['agencia'];
$numero_conta= $_POST['numero_conta'];
$cod_cliente = $_POST['cod_cliente'];
$tipo = $_POST['tipo'];
$cpf_titular1 = $_POST['cpf_titular1'];
$cpf_titular2 = $_POST['cpf_titular2'];
$cpf_titular3 = $_POST['cpf_titular3'];

$sql = "INSERT INTO conta (agencia, numero_conta, cod_cliente, tipo, cpf_titular1, cpf_titular2, cpf_titular3)
 VALUES ('$agencia', '$numero_conta', '$cod_cliente', '$tipo', '$cpf_titular1', '$cpf_titular2', '$cpf_titular3' )";

  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Cadastro Efetuado');window.location.href='index2.php';</script>";
  }
  else{
    echo "Tente novamente!";
  }



?>
