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

    <br>Nome Completo: <input type="text" id="nome" style="width:500px" ><br>
    <br>Data de Nascimento: <input type="date" id="datanasc" style="width:500px" ><br>
    <br>CPF: <input type="text" id="cpf" style="width:500px"><br>
    <br>RG: <input type="text" id="RG" style="width:500px"><br>
    <br>Nome da Mãe: <input type="text" id="nomeMãe" style="width:500px"><br>
    <br>Endereço: <input type="text" id="endereco" style="width:500px" ><br>
    <br>Bairro: <input type="text" id="bairro" style="width:500px"><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" style="width:200px" > Telefone (Celular):  <input type="text" id="telefoneCelular" style="width:200px"><br>
    <br>E-mail: <input type="email" style="width:500px"><br><br>

    <input type="submit" value="Cadastrar" name="btnCadastro" />


</fieldset>
  </div>

</body>
<?php include("footer.php"); ?>

</html>
