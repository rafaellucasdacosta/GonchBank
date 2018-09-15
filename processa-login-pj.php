<?php
  require_once('conexao.php');
  $numero_conta = $_POST['numero_conta'];
  $senha = $_POST['senha'];
  $query = "SELECT numero_conta, titular1, senha, saldo FROM contas WHERE numero_conta = '$numero_conta' and tipo = '2'";
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

<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $numero_conta = mysqli_escape_string($conn, $_POST['numero_conta']);
  $senha = mysqli_escape_string($conn, $_POST['senha']);

  if(isset($_POST['lembrar-senha'])):

    setcookie('login', $login, time()+3600);
    setcookie('senha', md5($senha), time()+3600);
  endif;

  if(empty($numero_conta) or empty($senha)):
    $erros[] = "<li> O campo numero da conta/senha precisa ser preenchido </li>";
  else:
    // 105 OR 1=1
    // 1; DROP TABLE teste

    $sql = "SELECT numero_conta FROM conta WHERE numero_conta = '$numero_conta'";
    $resultado = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultado) > 0):
      $sql = "SELECT senha FROM conta WHERE senha = '$senha'";
      $resultado = mysqli_query($conn, $sql);
      $sql = "SELECT * FROM conta WHERE numero_conta = '$conta' AND senha = '$senha'";

      $resultado = mysqli_query($conn, $sql);

      if(mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($conn);
        $_SESSION['logado'] = true;
        $_SESSION['numero_conta'] = $dados['numero_conta'];
        $_SESSION['saldo'] = $dados['saldo'];
        header('Location: index2.php');
      else:
        $erros[] = "<li> Usuário e senha não conferem </li>";
      endif;

    else:
      $erros[] = "<li> Usuário inexistente </li>";
    endif;

  endif;

endif;
?>
