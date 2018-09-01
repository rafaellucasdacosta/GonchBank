<header id="page-header2">
  <style>
  *{
  margin: 0; padding: 0;
  }

  .caixa {
  background: #d7d4dd;
  display: flex;
  flex-direction: row;
  justify-content: center;
  }

  .menu{
  position: relative;
  list-style:none;
  border:1px solid #d7d4dd;
  float:center;
  }

  .menu li{
  position:relative;
  float:left;
  border-right:1px solid #d7d4dd;
  }

  .menu li a{
  color:#000000;
  text-decoration:none;
  padding:5px 10px;
  display:block;
  }

  .menu li a:hover{
  background:#0a6bbc;
  color:#d7d4dd;
  }

  .menu li   ul{
  position:absolute;
  top:25px;
  left:0;
  background-color:#d7d4dd;
  display:none;
  }

  .menu li:hover ul, .menu li.over ul{
  display:block;
  }

  .menu li ul li{
  border:1px solid #d7d4dd;
  display:block;
  width:150px;
  }

  </style>
  <div class="caixa">

    <ul class="menu">
      <li><a href="index.php"><strong>Home</strong></a></li>

              <li><a href="#"><strong>Cadastrar-se</strong></a>
                  <ul>
                        <li><a href="cadastro-cliente.php"><strong>Pessoa Física</strong></a></li>
                  </ul>
              </li>
          <li><a href="#"><strong>Serviços</strong></a></li>
          <li><a href="#"><strong>Produtos</strong></a></li>
          <li><a href="#"><strong>Atendimento</strong></a></li>
          <li><a href="#"><strong>Conheça-nos</strong></a></li>
          <li><a href="#"><strong>Trabalhe Conosco</strong></a></li>

  </ul>

</div>
</header>
