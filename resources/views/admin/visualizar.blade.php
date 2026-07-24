
@extends('layouts.logoApp')

@section('content')

<h3 class="mb-3">Editar Perfil</h3>

<form action="{{ route('admin.update',  ['id' => $admin->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name"  value="{{ old('name', $admin->name) }}" required>
    <div class="invalid-feedback">
                @error('name') {{ $message }} @enderror
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
        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" value="{{ old('password', $admin->password) }}" required >
   <div class="invalid-feedback">
                @error('password') {{ $message }} @enderror
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