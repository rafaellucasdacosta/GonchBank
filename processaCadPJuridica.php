<?php
include_once("conexao.php");

$razaosocial = $_POST['razaoSocial'];
$nomeFantasia = $_POST['nomeFantasia'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$telFixo = $_POST['telefoneFixo'];
$telCel = $_POST['telefoneCelular'];
$email = $_POST['email'];

$sql = "INSERT INTO cadpjuridica (razaoSocial, nomeFantasia, cnpj, endereco, bairro, telComerc,celular, email)
VALUES ('$razaosocial','$nomeFantasia','$cnpj','$endereco','$bairro', '$telFixo', '$telCel', '$email')";
$execSQL = mysqli_query($conn, $sql);

if ($execSQL) {
  echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='login.php';</script>";
}
else{
  echo "erro";
}

?>
