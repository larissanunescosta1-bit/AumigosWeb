

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Esqueci minha senha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/usuario.css') }}">
</head>

<body>

    <div class="login-box">

        <h2 class="text-center mb-3">Esqueci minha senha</h2>

        <p class="text-center texto-recuperacao">
            Digite seu e-mail e enviaremos um link para você criar uma nova senha.
        </p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <label for="email">E-mail</label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="form-control"
                    placeholder="Digite seu e-mail"
                    required
                    autofocus
                >
            </div>

            <button type="submit" class="btn btn-login">
                Enviar link
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="forgot-link">
                Voltar para o login
            </a>
        </div>

    </div>

</body>


