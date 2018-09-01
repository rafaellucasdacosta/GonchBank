<?php
  require_once('conexao.php');
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $query = "select cpf, name, id, senha from users where cpf = '$cpf' ";
  if ($result = $conn->query($query)) {
    if ($row = $result->fetch_object()){
      if (strcmp($row->senha, $senha)==0){
        session_start();
        $_SESSION['cpf'] = $row->cpf;
        $_SESSION['id'] = $row->id;
        $_SESSION['name'] = $row->name;
        header("Location: timeline.php");
      } else {
        echo "<script language'javascript' type='text/javascript'>alert('Login ou senha incorreto(s).');window.location.href='login.php';</script>";
      }
    } else {
      echo "<script language'javascript' type='text/javascript'>alert('Erro desconhecido!');window.location.href='cadastro.php';</script>";
    }
  }
  else {
    echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='login.php';</script>";
  }
?>
