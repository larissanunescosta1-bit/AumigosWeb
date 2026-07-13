


  @extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/produto.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>


<div class="container container-box">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Produtos</h2>
      <a  class="btn btn-primary" href="{{ route('produto.create') }}">Criar novo perfil</a>
  </div>

  <table class="table table-bordered table-hover text-center align-middle">
    <thead>
      <tr>
        <th>ID</th>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição curta</th>
        <th>Descrição geral</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
       @foreach($produtos as $produto)
      <tr>
        <td>{{ $produto->id }}</td>
        <td>
         {{ $produto->imagem }}
        </td>
        <td>>{{ $produto->nome }}</td>
        <td>>{{ $produto->preco }}</td>
         <td>>{{ $produto->descricaoCurta }}</td>
          <td>{{ $produto->descricaoGeral}}</td>
        <td>
             
          <a title="Editar"  class="btn btn-warning btn-sm"  href="{{ route('produto.view', encrypt($produto->id)) }}">Editar</a>

          <a title="Excluir"class="btn btn-danger btn-sm" href="{{ route('produto.destroy', encrypt($produto->id)) }}">Excluir</a>
                  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 

@endsection

