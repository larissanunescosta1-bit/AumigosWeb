@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/prod.css') }}">

<div class="container container-box">

    <h3 class="mb-3">Editar Produto</h3>

    <form action="{{ route('produto.update', encrypt($produto->id)) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>
            <input
                type="text"
                class="form-control @error('nome') is-invalid @enderror"
                name="nome"
                value="{{ old('nome', $produto->nome) }}"
                placeholder="Digite o nome"
                required>

            @error('nome')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input
                type="number"
                step="0.01"
                class="form-control @error('preco') is-invalid @enderror"
                name="preco"
                value="{{ old('preco', $produto->preco) }}"
                placeholder="Digite o preço"
                required>

            @error('preco')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Imagem do Produto</label>
            <input
                type="file"
                class="form-control @error('imagem') is-invalid @enderror"
                name="imagem">

            @error('imagem')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Descrição Curta</label>
            <input
                type="text"
                class="form-control @error('descricao_curta') is-invalid @enderror"
                name="descricao_curta"
                value="{{ old('descricao_curta', $produto->descricao_curta) }}"
                placeholder="Digite a descrição curta">

            @error('descricao_curta')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Descrição Geral</label>
            <textarea
                class="form-control @error('descricao_geral') is-invalid @enderror"
                name="descricao_geral"
                rows="4"
                placeholder="Digite a descrição geral">{{ old('descricao_geral', $produto->descricao_geral) }}</textarea>

            @error('descricao_geral')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar Alterações
        </button>

        <a href="{{ route('produto.index') }}" class="btn btn-secondary">
            Voltar
        </a>

    </form>

</div>

@endsection