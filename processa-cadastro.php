  <?php
  header( 'content-type: text/html; charset=utf-8' );
  include_once("conexao.php");

  $tipo_cliente = $_POST['tipo_cliente'];
  $nome = $_POST['nome'];
  $dataNasc = $_POST['data_nasc'];
  $cpf_cnpj = $_POST['cpf_cnpj'];
  $pais = $_POST['pais'];
  $cep = $_POST['cep'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $bairro = $_POST['bairro'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $telefone = $_POST['telefone'];
  $telefone_adc = $_POST['telefone_adc'];
  $email = $_POST['email'];

  $sql = "INSERT INTO clientes (nome, dt_nasc, tipo_cliente, cpf_cnpj, pais, cep, cidade, estado, bairro, rua, numero, telefone, telefone_adc, email)
    VALUES ('$nome','$dataNasc','$tipo_cliente','$cpf_cnpj','$pais','$cep','$cidade','$estado','$bairro','$rua','$numero', '$telefone', '$telefone_adc','$email')";
    $execSQL = mysqli_query($conn, $sql);

    if ($execSQL) {
      echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='index.php';</script>";
    }
    else{
      echo "erro";
    }

  ?>
