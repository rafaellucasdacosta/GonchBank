<?php
  require_once('verifica-login.php');
  require_once('conexao.php');
  $numero_conta = "$auth_numero_conta";
  $nome = "$auth_nome";
  $saldo = "$auth_saldo";
?>
<html lang="pt">
<head>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <script src="js\javascript.js"></script>
  <?php include("menuSuperior.php"); ?>

</head>
<main>
  <body>
    <div class="fancy">
      <?php
        echo "<h3>Bem vindo(a)</h3>" . " " . $nome;
        echo "<h4>Conta</h4>" . " " . $numero_conta;
        echo "<h4>Saldo atual</h4>" . " " . $saldo;
      ?>
      <fieldset>
        <div class="box-saldo">
          <h2> Consulta de Saldo e Extrato </h2><BR>
            <h4>Saldo Atual:</h4><BR>
              <table  >
                <tr>
                  <th> Data </th>
                  <th> Valor </th>
                  <th> Autorização </th>
                </tr>
                <tr>
                  <td> 30/08/2018 </td>
                  <td> R$ 666,00 </td>
                  <td> 243926 </td>
                </tr>
              </table>
              __________
              <br><br>
              <h4>Extrato Últimos 5 dias </h4><BR>
                <table  >
                  <tr>
                    <th> Data </th>
                    <th> Valor </th>
                    <th> Descrição </th>
                    <th> Autorização </th>
                  </tr>
                  <tr>
                    <td> 30/08/2018 </td>
                    <td> R$ 1.000,00 </td>
                    <td> Transferencia de Tio Zé </td>
                    <td> 347382 </td>
                    <td> + </td>
                  </tr>
                  <tr>
                    <td> 30/08/2018 </td>
                    <td> R$ 444,00 </td>
                    <td> Bar do Zé Pretinho </td>
                    <td> 347386 </td>
                    <td> - </td>
                  </tr>
                </table>

              </div>
            </fieldset>
          </div>
        </body>
        <?php include("footer.php"); ?>
        </html>
