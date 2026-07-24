@extends('layouts.logoApp')

@section('content')

<a class="btn btn-dark" href="{{ route('produto.index') }}">Voltar</a>
<br>

<h4 class="mb-3">Cadastrar Produto</h4>

<form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation">
    @csrf

    <div class="mb-3">
        <label>Nome</label>
        <input type="text"
               class="form-control @error('nome') is-invalid @enderror"
               id="nome"
               name="nome"
               value="{{ old('nome') }}"
               placeholder="Digite o nome"
               required>

        <div class="invalid-feedback">
            @error('nome') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3">
        <label>Preço</label>
        <input type="number"
               class="form-control @error('precoReferencia') is-invalid @enderror"
               id="precoReferencia"
               name="precoReferencia"
               value="{{ old('precoReferencia') }}"
               placeholder="Digite o preço"
               required>

        <div class="invalid-feedback">
            @error('precoReferencia') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3">
        <label>Imagem do Produto</label>
        <input type="file"
               class="form-control @error('imagem') is-invalid @enderror"
               id="imagem"
               name="imagem"
               required>

        <div class="invalid-feedback">
            @error('imagem') {{ $message }} @enderror
        </div>
    </div>
<div class="mb-3">
    <label>Descrição Curta</label>
    <input type="text"
           class="form-control @error('descricaoCurta') is-invalid @enderror"
           id="descricaoCurta"
           name="descricaoCurta"
           value="{{ old('descricaoCurta') }}"
           placeholder="Digite uma descrição curta"
           required>

    <div class="invalid-feedback">
        @error('descricaoCurta') {{ $message }} @enderror
    </div>
</div>




    <div class="mb-3">
        <label>Descrição Geral</label>
        <textarea
            class="form-control @error('descricaoGeral') is-invalid @enderror"
            id="descricaoGeral"
            name="descricaoGeral"
            rows="4"
            placeholder="Digite a descrição geral"
            required>{{ old('descricaoGeral') }}</textarea>

        <div class="invalid-feedback">
            @error('descricaoGeral') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3">
        <label>Categoria</label>
        <select class="form-control @error('categoria_produtos_id') is-invalid @enderror"
                name="categoria_produtos_id"
                required>
            <option value="">Selecione uma categoria</option>

            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}"
                    {{ old('categoria_produtos_id') == $categoria->id ? 'selected' : '' }}>
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
                name="user_id"
                required>
            <option value="">Selecione um administrador</option>

            @foreach($admins as $admin)
               <option value="{{ $admin->id }}">
                    {{ old('user_id') == $admin->id ? 'selected' : '' }}>
                    {{ $admin->name }}
                </option>
            @endforeach
        </select>

        <div class="invalid-feedback">
            @error('user_id') {{ $message }} @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>

</form>

@endsection