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

    <fieldset><h2> Cadastro de Clientes Pessoa Física</h2>

    <br>Nome Completo: <input type="text" id="nome" ><br>
    <br>Data de Nascimento: <input type="date" id="datanasc" ><br>
    <br>CPF: <input type="text" id="cpf"><br>
    <br>RG: <input type="text" id="RG"><br>
    <br>Nome da Mãe: <input type="text" id="nomeMãe"><br>
    <br>Endereço: <input type="text" id="endereco"><br>
    <br>Bairro: <input type="text" id="bairro"><br>
    <br>Telefone:<input type="text" id="telefoneFixo" ><br>
    <br>E-mail: <input type="email" ><br><br>

    <input type="submit" value="Cadastrar" name="btnCadastro" />


</fieldset>
  </div>

</body>
<?php include("footer.php"); ?>

</html>
