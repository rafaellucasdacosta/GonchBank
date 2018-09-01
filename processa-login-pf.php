<?php
  require_once('conexao.php');
  $numero_conta = $_POST['numero_conta'];
  $senha = $_POST['senha'];
  $query = "SELECT numero_conta, titular1, senha, saldo FROM contas WHERE numero_conta = '$numero_conta'";
  if ($result = $conn->query($query)) {
    if ($row = $result->fetch_object()){
      if (strcmp($row->senha, $senha)==0){
        session_start();
        $_SESSION['numero_conta'] = $row->numero_conta;
        $_SESSION['titular1'] = $row->titular1;
        $_SESSION['saldo'] = $row->saldo;

        header('Location: saldo.php');
      } else {
        echo "<script language'javascript' type='text/javascript'>alert('Login ou senha incorreto(s).');window.location.href='index.php';</script>";
      }
    } else {
      echo "<script language'javascript' type='text/javascript'>alert('Erro desconhecido!');window.location.href='cadastro.php';</script>";
    }
  }
  else {
    echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='login.php';</script>";
  }
?>
