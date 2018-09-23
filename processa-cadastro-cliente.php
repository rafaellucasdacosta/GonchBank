<?php
  header( 'content-type: text/html; charset=utf-8' );
  require_once("conexao.php");
  require_once("validacao.php");

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $conf_senha = $_POST['conf_senha'];
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

  $cpf = validaCPF($cpf);

  $errors = "";
  if (!isValid($cpf)){
     $errors .= li("CPF é obrigatório");
  }
  if (!isValid($senha)){
     $errors .= li("Nome de usuário é obrigatório");
  }
  if (!isValid($conf_senha)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($nome)){
     $errors .= li("E-mail é obrigatório");
  }
  if (!isValid($cep)){
     $errors .= li("Sexo é obrigatório");
  }
  if (!isValid($cidade)){
     $errors .= li("Senha é obrigatória");
  }
  if (!isValid($estado)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($endereco)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($bairro)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($numero)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($telefone)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($celular)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if (!isValid($email)){
     $errors .= li("Confirmação de senha é obrigatória");
  }
  if ($errors) {
     session_start();
     $_SESSION['error'] = ul($errors);
     header("Location: cadastro-cliente.php");
     exit();
  }
  if (strcmp($conf_senha, $senha)!=0){
     session_start();
     $_SESSION['error'] = "A senha e a confirmação devem ser iguais";
     $_SESSION['name'] = $nome;
     header("Location: cadastro-cliente.php");
  }else{
    $stmt = $conn->prepare("INSERT INTO cliente (cpf, senha, nome, cep, cidade, estado, endereco, bairro, numero, telefone, celular, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $cpf, $senha, $nome, $cep, $cidade, $estado, $endereco, $bairro, $numero, $telefone, $celular, $email);
        if ($stmt->execute()){
           header("Location: cadastro-conta.php");
        } else {
           session_start();
           echo "erro no banco de dados. ".$conn->error;
           echo "<a href='cadastro-cliente.php'>Voltar</a>";
        }
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
