<html lang="pt-br">
<heah>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <?php include("header.php"); ?>
  <?php include("menuSuperior.php"); ?>
</head>
<body>
  <form action="processaCadPFisica.php" method="post">
    <div class="fancy">
      <fieldset><h2> Cadastro de Clientes Pessoa Física</h2>

        <br>Nome Completo: <input type="text" name="nome" id="nome" required><br>
        <br>Data de Nascimento: <input type="date" name="datanasc" id="datanasc" required><br>
        <br>CPF: <input type="text" name="cpf" id="cpf" required><br>
        <br>RG: <input type="text" name="rg" id="rg" required><br>
        <br>Nome da Mãe: <input type="text" name="nomeMae" id="nomeMae" required><br>
        <br>Endereço: <input type="text" name="endereco" id="endereco" required><br>
        <br>Bairro: <input type="text" name="bairro" id="bairro" required><br>
        <br>Telefone (Fixo):<input type="text" name="telefoneFixo" id="telefoneFixo"> Telefone (Celular):  <input type="text" name="telefoneCelular" id="telefoneCelular" required><br>
        <br>E-mail: <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Cadastrar" name="btnCadastro" />
      </fieldset>
    </div>
  </form>

</body>
<?php include("footer.php"); ?>

</html>
