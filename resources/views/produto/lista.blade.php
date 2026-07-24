@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/produto.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

<div class="container container-box">
     <div class="mb-3">
        <a class="btn btn-secondary" href="{{ route('perfilAdmin') }}"> ← Voltar ao Menu</a>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Produtos</h2>

        <a class="btn btn-primary" href="{{ route('produto.create') }}">
            Criar novo produto
        </a>
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

    <form class="mb-3" method="GET" action="{{ route('produto.search') }}">
        <div class="input-group">
            <input
                id="filtro"
                name="filtro"
                class="form-control"
                type="text"
                placeholder="Pesquisar..."
                value="{{ $filtro ?? '' }}"
                autofocus>

            <button class="btn btn-primary" type="submit">
                Pesquisar
            </button>
        </div>
    </form>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição Curta</th>
                <th>Descrição Geral</th>
                <th>Categoria</th>
                <th>Administrador</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
        @foreach($produtos as $produto)
            <tr>
           <td>{{ $produto->id }}</td>

          <td>
                    @if($produto->imagem)
                        <img src="{{ asset('storage/'.$produto->imagem) }}"
                             width="80"
                             height="80"
                             style="object-fit:cover; border-radius:8px;">
                    @endif
                </td>

                <td>{{ $produto->nome }}</td>

                <td>
                    R$ {{ number_format($produto->precoReferencia,2,',','.') }}
                </td>

                <td>{{ $produto->descricaoCurta }}</td>

                <td>{{ ($produto->descricaoGeral) }}</td>

               <td> {{ $produto->categoria?->nome ?? '-' }}</td>

                <td>
    {{ $produto->user?->name ?? '-' }}
</td>

                <td>

                    <a title="Editar"class="btn btn-warning btn-sm" href="{{ route('produto.view', $produto->id) }}">Editar
                    </a>

                    <a title="Excluir"class="btn btn-danger btn-sm btn-excluir" href="{{ route('produto.destroy', encrypt($produto->id)) }}">
                        Excluir
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $produtos->links() }}
    </div>
</div>
@endsection