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

    <br>Razão Social <input type="text" style="width:500px" id="razaoSocial" name="input" ><br>
    <br>Nome Fantasia <input type="text" style="width:500px" id="nomeFantasia" name="input"  ><br>
    <br>CNPJ: <input type="text" style="width:500px" id="cpf" name="input"  ><br>
    <br>Endereço: <input type="text" style="width:500px" id="endereco" name="input"  ><br>
    <br>Bairro: <input type="text" style="width:500px" id="bairro" name="input" ><br>
    <br>Telefone (Fixo):<input type="text" style="width:200px" id="telefoneFixo" name="input"  > Telefone (Celular):  <input type="text" style="width:200px" id="telefoneCelular" name="input" ><br>
    <br>E-mail: <input type="email" style="width:500px" id="email" name="input" ><br><br>

  <input type="submit" value="Cadastrar" name="btnCadastro" />
  </fieldset>
  </div>


</body>
<?php include("footer.php"); ?>
</html>
