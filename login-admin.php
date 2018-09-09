<html lang="pt-br">
  <head>
    <title>Login administrativo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="#">Sticky top</a>
  </nav>
      <form action="processa-login-admin.php" method="post" accept-charset="utf-8" class="form-login">
        <h2 class="form-login-heading">Insira suas credenciais</h2>
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" id="inputLogin" class="form-control" placeholder="Login" required>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="esqueci"> Esqueci a senha
          </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">
      </form>
    </div>
  </body>
</html>
