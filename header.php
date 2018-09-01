<header id="page-header">
  <div id="txt" class="header-login"><strong>Acesse sua conta</strong></div>
  <div id="form-pf" class="header-login">
    <form  action="processa-login-pf.php" id="pessoaf" method="post">
      <label><strong>Pessoa Física</strong></label>
      <input type="text" name="numero_conta" placeholder="Número da conta">
      <input type="password" name="senha" placeholder="Senha">
      <input type="submit" name="btn_login_pf" value="Acessar">
    </form>
  </div>
  <div id="form-pj" class="header-login">
    <form id="pessoaj" method="post" action="processa-login-pf.php">
      <label><strong>Pessoa Jurídica</strong></label>
      <input type="text" name="numero_conta" placeholder="Número da conta">
      <input type="text" name="senha" placeholder="Senha">
      <input type="submit" name="btn_login_pf" value="Acessar">
    </form>
  </div>
  </header>
