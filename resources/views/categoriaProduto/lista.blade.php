@extends('layouts.logoApp')

@section('content')

<div class="container mt-4 container-box">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Tipos de Produto</h2>
         <br>
        <a  class="btn btn-primary" href="{{ route('categoriaProduto.create') }}">Criar nova categoria</a>
        <br><br>
    </div>

      @if(session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif
     <form class="mb-3" method="GET" action="{{ route('categoriaProduto.search') }}">
        <div class="input-group">
            <input id="filtro" name="filtro" class="form-control" type="text" placeholder="Pesquisar..." value="{{ $filtro ?? '' }}" autofocus>
            <button class="btn btn-primary" type="submit">Pesquisar</button>
        </div>
    </form>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
              @foreach($categoriaProdutos as $categoriaProduto)
            <tr>
                <td>{{ $categoriaProduto->id }}</td>
                <td>{{ $categoriaProduto->nome }}</td>
                <td>{{ $categoriaProduto->descricao }}</td>
                <td>
     <a title="Editar"  class="btn btn-warning btn-sm"  href="{{ route('categoriaProduto.view', $categoriaProduto->id) }}">Editar</a>

          <a title="Excluir"class="btn btn-danger btn-sm  btn-sm btn-excluir" href="{{ route('categoriaProduto.destroy', encrypt($categoriaProduto->id)) }}">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>

      </table>



    <hr>


@endsection