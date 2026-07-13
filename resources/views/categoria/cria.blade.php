@extends('layouts.logoApp')

@section('content')

 <a class="btn btn-dark" href="{{ route('categoriaProduto.index') }}">Voltar</a>
 <br>
<!--cadastro de  tipo produto-->
    <h4 class="mb-3">Cadastrar Tipo de Produto</h4>

    <form  action="{{ route('categoriaProduto.store') }}" method="POST" class="needs-validation">
         @csrf
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control  @error('nome') is-invalid @enderror" id="nome" value="{{ old('nome') }}" name="nome"  placeholder="Digite o tipo do prod" required>
        <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
             <input type="text" class="form-control  @error('descricao') is-invalid @enderror" id="descricao" value="{{ old('descricao') }}" name="descricao"  placeholder="Digite a descriçao" required>
        <div class="invalid-feedback">
                @error('descricao') {{ $message }} @enderror
            </div>
        </div>
       
            </div>

        <button type="submit" class="btn btn-primary">
  Salvar
</button>

    </form>
    

</div>

@endsection