<html lang="pt-br">
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

  <link rel="stylesheet" href="css/signin.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>

  <div class="colorlib-loader"></div>

  <div class="colorlib-loader"></div>

	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div id="colorlib-logo"><a href="index.php">Gonch<span>Bank</span></a></div>
					</div>
					<div class="col-md-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Página Inicial</a></li>
							<li><a href="#pessoaFisica">Pessoa Física</a></li>
							<li><a href="#pessoaJuridica">Pessoa Jurídica</a></li>
              <!-- <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

      <section id="pessoaFisica">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-14 mx-auto">
              <h2>Pessoa física</h2>
              <p class="lead">Aqui você pode acessar sua conta de uso pessoal</p>
              <ul>
                <form class="form-signin" action"processa-login-pf.php" method="POST">
                      <h1 class="h3 mb-3 font-weight-normal">Insira as informações da conta</h1>
                      <?php
                      if(!empty($erros)):
                        foreach($erros as $erro):
                          echo $erro;
                        endforeach;
                      endif;
                      ?>
                      <label for="inputEmail" class="sr-only">Numero da conta</label>
                      <input type="text" id="inputLogin" name="numero_conta" class="form-control" placeholder="Número da conta" required autofocus>
                      <label for="inputPassword" class="sr-only">Senha</label>
                      <input type="password" id="inputSenha" name="senha" class="form-control" placeholder="Senha" required>
                      <div class="checkbox mb-3">
                        <label>
                          <!-- <input type="checkbox" value="remember-me"> Lembrar-me -->
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" name="btn-entrar" type="submit">Entrar</button>
                    </form>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="pessoaJuridica" class="bg-light">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-14 mx-auto">
              <h2>Pessoa Jurídica</h2>
              <p class="lead">Aqui você pode acessar sua conta empresarial</p>
              <ul>
                <form class="form-signin" action"processa-login-pj.php" method="POST">
                      <h1 class="h3 mb-3 font-weight-normal">Insira as informações da conta</h1>
                      <?php
                      if(!empty($erros)):
                        foreach($erros as $erro):
                          echo $erro;
                        endforeach;
                      endif;
                      ?>
                      <label for="inputEmail" class="sr-only">Numero da conta</label>
                      <input type="text" id="inputLogin" name="login" class="form-control" placeholder="Número da conta" required autofocus>
                      <label for="inputPassword" class="sr-only">Senha</label>
                      <input type="password" id="inputSenha" name="senha" class="form-control" placeholder="Senha" required>
                      <div class="checkbox mb-3">
                        <label>
                          <!-- <input type="checkbox" value="remember-me"> Lembrar-me -->
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" name="btn-entrar" type="submit">Entrar</button>
                    </form>
              </ul>
            </div>
          </div>
        </div>
      </section>


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
