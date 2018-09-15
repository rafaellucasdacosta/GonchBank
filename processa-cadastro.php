<?php
header( 'content-type: text/html; charset=utf-8' );
require_once("conexao.php");

$tipo = $_POST['tipo'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$nome_titular1 = $_POST['nome_titular1'];
$nome_titular2 = $_POST['nome_titular2'];
$nome_titular3 = $_POST['nome_titular3'];
$cpf_titular1 = $_POST['cpf_titular1'];
$cpf_titular2 = $_POST['cpf_titular2'];
$cpf_titular3 = $_POST['cpf_titular3'];

$sql = "INSERT INTO cliente (tipo, cpf_cnpj, nome, cep, cidade, estado, endereco, bairro, numero, telefone, celular, email, nome_titular1, nome_titular2, nome_titular3, cpf_titular1, cpf_titular2, cpf_titular3)
 VALUES ('$tipo', '$cpf_cnpj', '$nome', '$cep', '$cidade', '$estado', '$endereco', '$bairro', '$numero', '$telefone', '$celular', '$email', '$nome_titular1', '$nome_titular2', '$nome_titular3', '$cpf_titular1', '$cpf_titular2', '$cpf_titular3' )";

  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Cadastro Efetuado');window.location.href='cadastro-conta.php';</script>";
  }
  else{
    echo "Tente novamente!";
  }



?>
