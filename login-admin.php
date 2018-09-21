<?php

require_once 'conexao.php';
require_once 'util.php';

if(isset($_POST['btn-entrar'])):
  if(empty($_POST['cpf']) or empty($_POST['senha'])):
    $erros[] = "<li> Os campos CPF e Senha precisam ser preenchidos </li>";
  else:
    $cpf = mysqli_escape_string($conn, $_POST['cpf']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);
    $cpf_valido=validaCPF($cpf);


    $sql = "SELECT cpf FROM administrativo WHERE cpf = '$cpf_valido'";
    $resultado = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultado) > 0):
      $sql = "SELECT senha FROM administrativo WHERE senha = '$senha'";
      $resultado = mysqli_query($conn, $sql);
      $sql = "SELECT * FROM administrativo WHERE cpf = '$cpf_valido' AND senha = '$senha'";



      $resultado = mysqli_query($conn, $sql);

      if(mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($conn);

        // Sessão
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $dados['nome'];
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


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gonch Bank - Acesso administrativo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#cpf").mask("000.000.000-00")
    $("#cnpj").mask("00.000.000/0000-00")
    $("#telefone").mask("(00) 0000-0000")
    $("#salario").mask("999.999.990,00", {reverse: true})
    $("#cep").mask("00.000-000")
    $("#dataNascimento").mask("00/00/0000")

    $("#rg").mask("999.999.999-W", {
      translation: {
        'W': {
          pattern: /[X0-9]/
        }
      },
      reverse: true
    })

    var options = {
      translation: {
        'A': {pattern: /[A-Z]/},
        'a': {pattern: /[a-zA-Z]/},
        'S': {pattern: /[a-zA-Z0-9]/},
        'L': {pattern: /[a-z]/},
      }
    }

    $("#placa").mask("AAA-0000", options)

    $("#codigo").mask("AA.LLL.0000", options)

    $("#celular").mask("(00) 0000-00009")

    $("#celular").blur(function(event){
      if ($(this).val().length == 15){
        $("#celular").mask("(00) 00000-0009")
      }else{
        $("#celular").mask("(00) 0000-00009")
      }
    })
  })
  </script>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="features-icons-icon d-flex">
      <i class="icon-briefcase m-auto text-primary"></i>
    <a class="navbar-brand" href="#"><span class="text-primary"> Gonch</span> Bank</a>
  </div>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <div class="features-icons-icon d-flex">
          <i class="icon-home m-auto text-primary"></i>
          <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
        </div>
      </li>
      <li class="nav-item">
        <div class="features-icons-icon d-flex">
          <i class="icon-info m-auto text-primary"></i>
        <a class="nav-link" href="#">Sobre</a>
      </div>
      </li>
      <li class="nav-item">
        <div class="features-icons-icon d-flex">
          <i class="icon-phone m-auto text-primary"></i>
        <a class="nav-link" href="#">Contato</a>
      </div>
      </li>
    </ul>
  </div>
</nav>

  <!-- Login -->
  <header class="masthead text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-15 col-xl-7 mx-auto">
          <div class="card text-center">
            <div class="card-header text-primary">
              <h1>Acesso administrativo<h1>
              <h5 class="text-dark">Entre em sua conta para gerenciar clientes</h5>
            </div>
            <div class="card-body">
              <form class="mb-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-row text-center">
                  <div class="col-md-8 col-lg-15 col-xl-7 mx-auto">
                    <label>CPF</label>
                    <input type="text" id="cpf" name="cpf" class="form-control form-control-lg text-center" placeholder="Insira o CPF" required autofocus><br>
                  </div>
                  <div class="col-md-8 col-lg-15 col-xl-7 mx-auto">
                    <label>Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control form-control-lg text-center" placeholder="" required><br>
                  </div>
                  <div class="col-md-8 col-lg-15 col-xl-7 mx-auto text-danger">
                    <?php
                    if(!empty($erros)):
                      foreach($erros as $erro):
                        echo $erro;
                      endforeach;
                    endif;
                    ?>
                    <button type="submit" id="btn-entrar" name="btn-entrar" class="btn btn-block btn-lg btn-primary">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <!-- Rodapé -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#" class="text-primary">Sobre</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" class="text-primary">Contato</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" class="text-primary">Termos de Uso</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#"class="text-primary">Política de Privacidade</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Gonch Bank 2018. Todos os direitos reservados.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
</body>

</html>
