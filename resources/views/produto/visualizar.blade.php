@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/prod.css') }}">

<div class="container container-box">

    <h3 class="mb-3">Editar Produto</h3>

    <form action="{{ route('produto.update', ['id' => $produto->id]) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text"
                   class="form-control @error('nome') is-invalid @enderror"
                   name="nome"
                   value="{{ old('nome', $produto->nome) }}"
                   placeholder="Digite o nome"
                   required>

            <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number"
                   step="0.01"
                   class="form-control @error('precoReferencia') is-invalid @enderror"
                   name="precoReferencia"
                   value="{{ old('precoReferencia', $produto->precoReferencia) }}"
                   placeholder="Digite o preço"
                   required>

            <div class="invalid-feedback">
                @error('precoReferencia') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Imagem do Produto</label>

            @if($produto->imagem)
                <br>
                <img src="{{ asset('storage/'.$produto->imagem) }}"
                     width="120"
                     class="mb-2">
            @endif

            <input type="file"
                   class="form-control @error('imagem') is-invalid @enderror"
                   name="imagem">

            <div class="invalid-feedback">
                @error('imagem') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Descrição Curta</label>

            <input type="text"
                   class="form-control @error('descricaoCurta') is-invalid @enderror"
                   name="descricaoCurta"
                   value="{{ old('descricaoCurta', $produto->descricaoCurta) }}"
                   placeholder="Digite a descrição curta"
                   required>

            <div class="invalid-feedback">
                @error('descricaoCurta') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Descrição Geral</label>

            <textarea
                class="form-control @error('descricaoGeral') is-invalid @enderror"
                name="descricaoGeral"
                rows="4"
                placeholder="Digite a descrição geral"
                required>{{ old('descricaoGeral', $produto->descricaoGeral) }}</textarea>

            <div class="invalid-feedback">
                @error('descricaoGeral') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Categoria</label>

            <select class="form-control @error('categoria_produtos_id') is-invalid @enderror"
                    name="categoria_produtos_id"
                    required>

            @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ old('categoria_produtos_id', $produto->categoria_produtos_id) == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nome }}
                    </option>
                @endforeach

            </select>

            <div class="invalid-feedback">
                @error('categoria_produtos_id') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Administrador</label>

            <select class="form-control @error('admin_id') is-invalid @enderror"
                    name="admin_id"
                    required>

                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}"
                        {{ old('admin_id', $produto->admin_id) == $admin->id ? 'selected' : '' }}>
                        {{ $admin->nome }}
                    </option>
                @endforeach

            </select>

            <div class="invalid-feedback">
                @error('admin_id') {{ $message }} @enderror
            </div>
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