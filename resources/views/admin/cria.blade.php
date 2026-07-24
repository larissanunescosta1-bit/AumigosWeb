 @extends('layouts.logoApp')

@section('content')

 <a class="btn btn-dark" href="{{ route('admin.index') }}">Voltar</a>
 <br>
 
 <h4 class="mb-3">Cadastrar Perfil</h4>

    <form   action="{{ route('admin.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
         @csrf
    <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" name="name"  placeholder="Digite o nome" required>
         <div class="invalid-feedback">
                @error('name') {{ $message }} @enderror
            </div>
        
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input 
                type="email" 
                class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email"  placeholder="Digite o email" required>
          <div class="invalid-feedback">
                @error('email') {{ $message }} @enderror
            </div>
            </div>

        <div class="mb-3">
            <label>Senha</label>
            <input 
                type="password" 
                class="form-control   @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" name="password"  placeholder="Digite a senha" required>
         <div class="invalid-feedback">
                @error('password') {{ $message }} @enderror
            </div>
            </div>

       <button type="submit" class="btn btn-primary">
  Salvar
</button>

    </form>

</div>

@endsection