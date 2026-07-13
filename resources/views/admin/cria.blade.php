 @extends('layouts.logoApp')

@section('content')

 <a class="btn btn-dark" href="{{ route('admin.index') }}">Voltar</a>
 <br>
 
 <h4 class="mb-3">Cadastrar Perfil</h4>

    <form   action="{{ route('admin.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
         @csrf
    <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control  @error('nome') is-invalid @enderror" id="nome" value="{{ old('nome') }}" name="nome"  placeholder="Digite o nome" required>
         <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
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
                class="form-control   @error('senha') is-invalid @enderror" id="senha" value="{{ old('senha') }}" name="senha"  placeholder="Digite a senha" required>
         <div class="invalid-feedback">
                @error('senha') {{ $message }} @enderror
            </div>
            </div>

       <button type="submit" class="btn btn-primary">
  Salvar
</button>

    </form>

</div>

@endsection