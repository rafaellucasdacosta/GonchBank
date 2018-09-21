<?php
require_once('verifica-login.php');
require_once('conexao.php');
$nome = "$auth_nome";
?>
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

     <p> Bem vindo, </P>
       <?php
          echo $nome;
        ?>
    <form name="form" action="processa-cadastro.php" method="POST">
      <br><br>
      <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
       <div class="card card-signin my-5">
         <div class="card-body">
           <h5 class="card-title text-center">Cadastre</h5>
           <p>* Para cadastro de Pessoa Jurídica deverá ter no mínimo 2 titulares. </P>
        <div class="form-label-group">
          <label>Tipo de conta: </label>
          <input type="text" class="form-control" name="tipo"><br>
          <label>CPF/CNPJ: </label>
          <input type="text" class="form-control" name="cpf_cnpj"><br>
          <label>Nome: </label><br>
          <input type="text" class="form-control" name="nome"><br>
          <label>CEP: </label>
          <input type="text" class="form-control" name="cep"><br>
          <label>Cidade: </label>
          <input type="text" class="form-control" name="cidade"><br>
          <label>Estado: </label>
          <input type="text" class="form-control" name="estado"><br>
          <label>Endereço: </label>
          <input type="text" class="form-control " name="endereco"><br>
          <label>Bairro: </label>
          <input type="text" class="form-control " name="bairro"><br>
          <label>Numero: </label>
          <input type="text" class="form-control" name="numero"><br>
          <label>Telefone: </label>
          <input type="text" class="form-control" name="telefone"><br>
          <label>Celular: </label>
          <input type="text" class="form-control" name="celular"><br>
          <label>E-mail: </label>
          <input type="text" class="form-control" name="email" ><br>
          <label>1º Titular: </label>
           <input type="text" class="form-control" name="nome_titular1"><br>
           <label>CPF: </label>
          <input type="text" class="form-control" name="cpf_titular1" ><br>
          <label>2º Titular: </label>
           <input type="text" class="form-control" name="nome_titular2" ><br>
          <label>CPF: </label>
           <input type="text" class="form-control" name="cpf_titular1pf2" ><br>
          <label>3º Titular: </label>
           <input type="text" class="form-control" name="nome_titular3"  ><br>
          <label>CPF: </label>
           <input type="text" class="form-control" name="cpf_titular3" ><br>

          <br>
          <br>
          <input type="submit" value="Cadastrar" >
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  </body>
  <?php include("footer.php"); ?>
</html>
