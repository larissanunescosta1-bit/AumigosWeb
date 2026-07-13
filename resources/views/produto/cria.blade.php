 @extends('layouts.logoApp')

@section('content')
 <a class="btn btn-dark" href="{{ route('produto.index') }}">Voltar</a>
 <br>
<!--cadastro de produto-->
  <h4 class="mb-3">Cadastrar Produto</h4>

  <form    action="{{ route('produto.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
     @csrf
  <div class="mb-3">
      <label>Nome</label>
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" value="{{ old('nome') }}" name="nome"  placeholder="Digite o nome" required>
    <div class="invalid-feedback">
                @error('nome') {{ $message }} @enderror
            </div>
    </div>

    <div class="mb-3">
      <label>Preço</label>
      <input type="number" class="form-control  @error('nome') is-invalid @enderror" id="preco" value="{{ old('preco') }}" name="preco"  placeholder="Digite o preco" required>
      <div class="invalid-feedback">
                @error('preco') {{ $message }} @enderror
            </div>
    </div>

    
    <div class="mb-3">
      <label>Imagem do Produto</label>
      <input type="file" class="form-control  @error('imagem') is-invalid @enderror" id="imagem" value="{{ old('imagem') }}" name="imagem"  placeholder="imagem" required>
       <div class="invalid-feedback">
                @error('imagem') {{ $message }} @enderror
            </div>
    </div>

      <div class="mb-3">
      <label>Descricao curta</label>
      <input type="text" class="form-control  @error('curta') is-invalid @enderror" id="curta" value="{{ old('curta') }}" name="curta"  placeholder="Digite a descricao curta" required>
    <div class="invalid-feedback">
                @error('curta') {{ $message }} @enderror
            </div>
    </div>

    <div class="mb-3">
      <label>Descricao geral</label>
      <input type="text" class="form-control  @error('curta') is-invalid @enderror" id="curta" value="{{ old('curta') }}" name="curta"  placeholder="Digite a descricao curta" required >
     <div class="invalid-feedback">
                @error('curta') {{ $message }} @enderror
            </div>
    
    </div>

   <button type="button" class="btn btn-primary">
  Salvar
</button>
  </form>
</div>

@endsection