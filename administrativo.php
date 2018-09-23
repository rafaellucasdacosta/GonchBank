<?php
  require_once('verifica-login.php');
  require_once('conexao.php');
  $nome = "$auth_nome";
  $exibe = "<a class='nav-link'>$nome</a>"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

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
        <a class="navbar-brand" href="index.php"><span class="text-primary"> Gonch</span> Bank</a>
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
            <i class="icon-user m-auto text-primary"></i>
            <?php
              echo $exibe;
             ?>
          </div>
        </li>
        <li class="nav-item">
          <div class="features-icons-icon d-flex">
            <i class="icon-logout m-auto text-primary"></i>
            <a class="nav-link" href="logout.php">Sair</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center border border-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-people m-auto text-primary"></i>
            </div>
            <h3>Cadastrar Cliente</h3>
            <p class="lead mb-0">Cadastre novos clientes que desejam abrir uma conta!</p>
          </div>
          <button type="button" class="btn btn-primary btn-lg" onclick="location.href='cadastro-cliente.php'">Cadastrar</button>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Gerenciar Contas</h3>
            <p class="lead mb-0">Gerencie contas de clientes e habilite pagamentos de boletos!</p>
          </div>
          <button type="button" class="btn btn-primary btn-lg" onclick="location.href='cadastro.php'">Gerenciar</button>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-settings m-auto text-primary"></i>
            </div>
            <h3>Perfil</h3>
            <p class="lead mb-0">Altere as suas informações pessoais e de usuário!</p>
          </div>
          <button type="button" class="btn btn-primary btn-lg" onclick="location.href='cadastro.php'">Alterar</button>
        </div>
      </div>
    </div>
  </section>

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
          <p class="text-muted small mb-4 mb-lg-0">&copy; Copyright (c) 2013-2018 Blackrock Digital LLC</p>
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
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
