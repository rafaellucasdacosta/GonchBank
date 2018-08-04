<html lang="pt-br">
<heah>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <?php include("header.php"); ?>

</head>

<body>
  <form>
    <div class="fancy">

    <fieldset><h2> Cadastro de Clientes Pessoa Jurídica</h2>

    <br>Razão Social <input type="text" id="razaoSocial" ><br>
    <br>Nome Fantasia <input type="text" id="nomeFantasia" ><br>
    <br>CNPJ: <input type="text" id="cpf" ><br>
    <br>Endereço: <input type="text" id="endereco" ><br>
    <br>Bairro: <input type="text" id="bairro"><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" > Telefone (Celular):  <input type="text" id="telefoneCelular"><br>
    <br>E-mail: <input type="email"><br><br>

  <input type="submit" value="Cadastrar" name="btnCadastro" />
  </fieldset>
  </div>


</body>
<?php include("footer.php"); ?>
</html>
