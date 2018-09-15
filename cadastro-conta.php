<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <?php include("header.php"); ?>
      <?php include("menuSuperior.php"); ?>

  </head>
  <body>
    <form name="form" action="processa-cadastro.php" method="POST">
      <br><br>
      <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
       <div class="card card-signin my-5">
         <div class="card-body">
           <h5 class="card-title text-center">Cadastre as Informações de Conta</h5>
        <div class="form-label-group">
          <label>Agencia: </label>
          <input type="text" class="form-control" name="agencia"><br>
          <label>Número da conta: </label>
          <input type="text" class="form-control" name="numero_conta"><br>
          <label>Código Cliente: </label><br>
          <input type="text" class="form-control" name="cod_cliente"><br>
          <label>Tipo: </label>
          <input type="text" class="form-control" name="tipo"><br>
          <label>CPF do Titular: </label>
          <input type="text" class="form-control" name="cpf_titular1" ><br>
          <label>CPF do Titular: </label>
          <input type="text" class="form-control" name="cpf_titular2" ><br>
          <label>CPF do Titular: </label>
          <input type="text" class="form-control" name="cpf_titular3" ><br>

          <br>
          <br>
          <input type="submit" value="Cadastrar Dados da Conta!" >
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  </body>
  <?php include("footer.php"); ?>
</html>
