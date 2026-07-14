@extends('layouts.logoApp')

@section('content')

<div class="container container-box">

    <h3 class="mb-3">Editar Tipo de Produto</h3>

    <form action="{{ route('categoriaProduto.update', ['id' => $categoriaProduto->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nome</label>
            <input type="text"class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome', $categoriaProduto->nome) }}" placeholder="Digite o nome do tipo" required>
           <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <input
                type="text"
                class="form-control @error('descricao') is-invalid @enderror"
                name="descricao"
                value="{{ old('descricao', $categoriaProduto->descricao) }}"
                placeholder="Digite a descrição"
                required>

             <div class="invalid-feedback">
                @error('descricao') {{ $message }} @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar alterações
        </button>
        <a href="{{ route('categoriaProduto.index') }}" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

@endsection