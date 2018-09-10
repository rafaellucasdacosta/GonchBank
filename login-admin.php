<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $login = mysqli_escape_string($conn, $_POST['login']);
  $senha = mysqli_escape_string($conn, $_POST['senha']);

  if(isset($_POST['lembrar-senha'])):

    setcookie('login', $login, time()+3600);
    setcookie('senha', md5($senha), time()+3600);
  endif;

  if(empty($login) or empty($senha)):
    $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
  else:
    // 105 OR 1=1 
      // 1; DROP TABLE teste

    $sql = "SELECT login FROM administrativo WHERE login = '$login'";
    $resultado = mysqli_query($conn, $sql);    

    if(mysqli_num_rows($resultado) > 0):
    $sql = "SELECT senha FROM administrativo WHERE senha = '$senha'";
    $resultado = mysqli_query($conn, $sql);           
    $sql = "SELECT * FROM administrativo WHERE login = '$login' AND senha = '$senha'";



    $resultado = mysqli_query($conn, $sql);

      if(mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($conn);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        header('Location: index.php');
      else:
        $erros[] = "<li> Usuário e senha não conferem </li>";
      endif;

    else:
      $erros[] = "<li> Usuário inexistente </li>";
    endif;

  endif;

endif;
?>

<html lang="pt-br">
  <head>
    <title>Login administrativo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Página inicial</a>
  </nav>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-login">
        <h2 class="form-login-heading">Login Administrativo</h2>
        <?php 
        if(!empty($erros)):
          foreach($erros as $erro):
            echo $erro;
          endforeach;
        endif;
        ?>
        <label for="login" class="sr-only">Login</label>
        <input type="text" name="login" class="form-control" placeholder="Login" >
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" >
        <div class="checkbox">
          <label>
            <input type="checkbox" name="lembrar-se" value="esqueci"> Lembrar Senha
          </label>
        </div>
        <input type="submit" name="btn-entrar" class="btn btn-lg btn-primary btn-block" value="Entrar">
      </form>
    </div>
  </body>
</html>
