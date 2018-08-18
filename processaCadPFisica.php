<?php
  include_once("conexao.php");

$nome = $_POST['nome'];
$dataNasc = $_POST['datanasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nomeMae = $_POST['nomeMae'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$telFixo = $_POST['telefoneFixo'];
$telCel = $_POST['telefoneCelular'];
$email = $_POST['email'];

$sql = "INSERT INTO cadpfisica (nome, dtNasc, cpf, rg, nomeMae, endereco, bairro, telCel,telFixo, email)
  VALUES ('$nome','$dataNasc','$cpf','$rg','$nomeMae','$endereco','$bairro', '$telCel', '$telFixo','$email')";
  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='login.php';</script>";
  }
  else{
    echo "erro";
  }

?>
