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
           <h5 class="card-title text-center">Cadastre</h5>
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
          <label>Tel: </label>
          <input type="text" class="form-control" name="telefone" ><br>
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
          <input type="submit" value="Cadastrar!" >
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  </body>
  <?php include("footer.php"); ?>
</html>
