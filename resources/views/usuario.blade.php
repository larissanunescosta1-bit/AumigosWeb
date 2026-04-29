<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
</head>

<body>
  

  <div class="login-box">
    <h2 class="text-center mb-4">Login</h2>

    <form action="/usuario" method="POST">
      

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
      </div>

    <a href="/admin" class="btn btn-login">
    Entrar
</a>

    </form>
  </div>

</body>
</html>