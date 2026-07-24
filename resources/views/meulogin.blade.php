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
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

  <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label>Email</label>
         <input 
                type="email" 
                name="email" 
                value="{{ old('email') }}"
                class="form-control"
                placeholder="Digite seu email"
                required
                autofocus>
        </div>
      

      <div class="mb-3">
        <label>Senha</label>
       <input 
                type="password" 
                name="password"
                class="form-control"
                placeholder="Digite sua senha"
                required>
      </div>
 <div class="form-check mb-3">
            <input 
                class="form-check-input"
                type="checkbox"
                name="remember">

            <label class="form-check-label">
                Lembrar-me
            </label>
             @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-link">
                    Esqueci minha senha
                </a>
            @endif
        </div>
   <button type="submit" class="btn btn-login">
    Entrar
</button>

    </form>
  </div>

</body>
</html>