
@extends('layouts.logoApp')

@section('content')

<h3 class="mb-3">Editar Perfil</h3>

<form action="{{ route('admin.update',  ['id' => $admin->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome', $admin->nome) }}" required>
    <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
            </div>
   
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required >
    <div class="invalid-feedback">
                @error('email') {{ $message }} @enderror
            </div>
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control  @error('senha') is-invalid @enderror" id="senha" name="senha" value="{{ old('senha', $admin->password) }}" required >
   <div class="invalid-feedback">
                @error('senha') {{ $message }} @enderror
            </div>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar alterações
    </button>

    <a href="{{ route('admin.index') }}" class="btn btn-secondary">
        Voltar
    </a>

</form>

@endsection