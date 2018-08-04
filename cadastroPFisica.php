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

    <br>Nome Completo: <input type="text" id="nome" ><br>
    <br>Data de Nascimento: <input type="date" id="datanasc" ><br>
    <br>CPF: <input type="text" id="cpf" ><br>
    <br>RG: <input type="text" id="RG"><br>
    <br>Nome da Mãe: <input type="text" id="nomeMãe" ><br>
    <br>Endereço: <input type="text" id="endereco" ><br>
    <br>Bairro: <input type="Bairro" id="bairro"><br>
    <br>Telefone (Fixo):<input type="text" id="telefoneFixo" > Telefone (Celular):  <input type="text" id="telefoneCelular"><br>
    <br>E-mail: <input type="email"><br><br>

    <input type="submit" value="Cadastrar" />


</fieldset>
  </div>

</body>
<?php include("footer.php"); ?>

</html>
