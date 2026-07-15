@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    
<div class="container container-box">
     <div class="mb-3">
        <a class="btn btn-secondary" href="{{ route('perfilAdmin') }}"> ← Voltar ao Menu</a>
    </div>
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Perfis</h2>
        <br>
        <a  class="btn btn-primary" href="{{ route('admin.create') }}">Criar novo perfil</a>
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
     <form class="mb-3" method="GET" action="{{ route('admin.search') }}">
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
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->nome }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                
          <a title="Editar"   class="btn btn-primary btn-sm"  href="{{ route('admin.view', $admin->id) }}">Editar</a>

          <a title="Excluir"class="btn btn-danger btn-sm  btn-sm btn-excluir" href="{{ route('admin.destroy', encrypt($admin->id)) }}">Excluir</a>
      
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection