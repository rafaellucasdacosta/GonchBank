<html lang="pt-br">
<heah>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <?php include("header.php"); ?>
  <?php include("menuSuperior.php"); ?>


</head>

<body>
  <form action="processaCadPJuridica.php" method="post">
    <div class="fancy">

    <fieldset><h2> Cadastro de Clientes Pessoa Jurídica</h2>

    <br>Razão Social <input type="text" id="razaoSocial" name="razaoSocial"required><br>
    <br>Nome Fantasia <input type="text" id="nomeFantasia" name="nomeFantasia"required><br>
    <br>CNPJ: <input type="text" id="cnpj" name="cnpj"required><br>
    <br>Endereço: <input type="text" id="endereco" name="endereco"required><br>
    <br>Bairro: <input type="text"  id="bairro" name="bairro" required><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" name="telefoneFixo"required> Telefone (Celular):  <input type="text" style="width:200px" id="telefoneCelular" name="telefoneCelular" ><br>
    <br>E-mail: <input type="email" id="email" name="email" required><br><br>

  <input type="submit" value="Cadastrar" name="btnCadastro">
  </fieldset>
  </div>
</form>


</body>
<?php include("footer.php"); ?>
</html>
