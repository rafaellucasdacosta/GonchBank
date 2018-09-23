<?php
  header( 'content-type: text/html; charset=utf-8' );
  require_once("conexao.php");

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
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

  $stmt = $conn->prepare("INSERT INTO cliente (cpf, senha, nome, cep, cidade, estado, endereco, bairro, numero, telefone, celular, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssssssssss", $cpf, $senha, $nome, $cep, $cidade, $estado, $endereco, $bairro, $numero, $telefone, $celular, $email);
      if ($stmt->execute()){
         header("Location: cadastro-conta.php");
      } else {
         session_start();
         echo "erro no banco de dados. ".$conn->error;
         echo "<a href='cadastro-cliente.php'>Voltar</a>";
      }

  // $sql = "INSERT INTO cliente (cpf, senha, nome, cep, cidade, estado, endereco, bairro, numero, telefone, celular, email)
  // VALUES ('$cpf', '$senha', '$nome', '$cep', '$cidade', '$estado', '$endereco', '$bairro', '$numero', '$telefone', '$celular', '$email')";
  //
  // $execSQL = mysqli_query($conn, $sql);
  //
  // if ($execSQL) {
  //   echo "<script language'javascript' type='text/javascript'>alert('Cadastro Efetuado');window.location.href='cadastro-conta.php';</script>";
  // }
  // else{
  //   echo "Tente novamente!";
  // }
?>
