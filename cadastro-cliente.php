

<html lang="pt-br">
<heah>
  <meta charset="UTF-8">
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <?php include("header.php"); ?>
    <?php include("menuSuperior.php"); ?>
</head>
<body>

  <form action="processa-cadastro-conta.php" method="post">
    <div class="fancy">
      <fieldset><h2> Cadastro de contas</h2><br>
        <label>Tipo de Conta: </label>
        <?php session_start();
        $tipo_cliente = $_SESSION['tipo_cliente'];
        echo " " . $tipo_cliente;
        ?>
        <br><br>
        <label>Titular 1</label><br>
        <input type="text" id="titular1" name="titular1"/><br>
        <label>CPF do titular 1</label><br>
        <input type="text" id="cpf_titular1" name="cpf_titular1"/><br>
        <label>Titular 2</label><br>
        <input type="text" id="titular2" name="titular2"/><br>
        <label>CPF do titular 2</label><br>
        <input type="text" id="cpf_titular2" name="cpf_titular2"/><br>
        <label>Senha</label><br>
        <input type="password" id="senha" name="senha"/><br>
        <label>Confirma Senha</label><br>
        <input type="password" id="confirma_senha" name="confirma_senha"/><br>
        <label>Saldo Inicial</label><br>
        <input type="number" id="saldo" name="saldo"/><br>
        <input type="submit" value="Cadastrar" name="btnCadastro" />
      </fieldset>
    </div>
  </body>
  <?php include("footer.php"); ?>
  </html>
