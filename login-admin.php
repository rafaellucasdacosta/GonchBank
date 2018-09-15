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

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Banco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>

  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div id="colorlib-logo"><a href="index.html">Gonch<span>Bank</span></a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul>
                <li class="active"><a href="index.php">Página Inicial</a></li>
                <li class="has-dropdown">
                  <ul class="dropdown">
                    <li><a href="#">menu 1</a></li>
                    <li><a href="#">menu 2</a></li>
                    <li><a href="#">menu 3</a></li>
                    <li><a href="#">menu 4</a></li>
                  </ul>
                </li>
                <li><a href="about.html">Sobre</a></li>
                <li><a href="contact.html">Contato</a></li>
                <li class="btn-cta"><a href="login-admin.php"><span>Acesso administrativo</span></a></li>
                <!-- <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li> -->
              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto centered">
          <div class="card card-signin my-5">
            <div class="card-body">
              <?php
              if(!empty($erros)):
                foreach($erros as $erro):
                  echo $erro;
                endforeach;
              endif;
              ?>
              <h5 class="card-title text-center">Login Administrativo</h5>
              <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="login" class="form-control" placeholder="Login" required autofocus>
                  <label for="inputEmail">Login</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                  <label for="inputPassword">Senha</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btn-entrar" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer id="colorlib-footer" role="contentinfo">
      <div class="container">
      </div>
      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>
            <small class="block">&copy; 2018 LawFirm. All Rights Reserved. Created by <a href="https://colorlib.com/" target="_blank">Colorlib</a></small>
            <small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
          </p>
        </div>
      </div>

    </div>
  </footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>