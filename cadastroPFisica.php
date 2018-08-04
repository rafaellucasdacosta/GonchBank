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

    <fieldset><h2> Cadastro de Clientes Pessoa Física</h2>

    <br>Nome Completo: <input type="text" id="nome" size="100" ><br>
    <br>Data de Nascimento: <input type="date" id="datanasc" size="50" ><br>
    <br>CPF: <input type="text" id="cpf" size="50"><br>
    <br>RG: <input type="text" id="RG" size="50"><br>
    <br>Nome da Mãe: <input type="text" id="nomeMãe" size="50"><br>
    <br>Endereço: <input type="text" id="endereco" size="50" ><br>
    <br>Bairro: <input type="text" id="bairro" size="50"><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" size="50" > Telefone (Celular):  <input type="text" id="telefoneCelular" size="50"><br>
    <br>E-mail: <input type="email" size="50"><br><br>

    <input type="submit" value="Cadastrar" name="btnCadastro" />


</fieldset>
  </div>

</body>
<?php include("footer.php"); ?>

</html>
