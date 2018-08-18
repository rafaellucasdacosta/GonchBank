<html lang="pt-br">
<heah>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <?php include("header.php"); ?>
  <?php include("menuSuperior.php"); ?>


</head>

<body>
  <form>
    <div class="fancy">

    <fieldset><h2> Cadastro de Clientes Pessoa Jurídica</h2>

    <br>Razão Social <input type="text" id="razaoSocial" name="input"required><br>
    <br>Nome Fantasia <input type="text" id="nomeFantasia" name="input"required><br>
    <br>CNPJ: <input type="text" id="cpf" name="input"required><br>
    <br>Endereço: <input type="text" id="endereco" name="input"required><br>
    <br>Bairro: <input type="text"  id="bairro" name="input" required><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" name="input"required> Telefone (Celular):  <input type="text" style="width:200px" id="telefoneCelular" name="input" ><br>
    <br>E-mail: <input type="email" id="email" name="input" required><br><br>

  <input type="submit" value="Cadastrar" name="btnCadastro">
  </fieldset>
  </div>


</body>
<?php include("footer.php"); ?>
</html>
