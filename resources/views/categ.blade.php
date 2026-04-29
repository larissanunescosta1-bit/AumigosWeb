@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/tipoProduto.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

<div class="container mt-4 container-box">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Tipos de Produto</h2>
       
    </div>

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
            <tr>
                <td>1</td>
                <td>Laços</td>
                <td>laços para pets</td>
                <td>
  <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar"> Editar</button>
   
          <button type="button" class="btn btn-danger btn-sm" >Excluir</button>
   
                </td>
            </tr>
        </tbody>

      </table>
<!--abri um modal-->
<div class="modal fade" id="modalEditar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar  Tipo de Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
    <form>
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control"  placeholder="Digite o nome do tipo">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
             <input type="text" class="form-control" placeholder="Digite a descrição ">
        </div>

        <button type="button" class="btn btn-primary">
  Salvar
</button>

    </form>
    <br>
    <a href="/admin">Voltar</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Fechar
        </button>
        <button type="button" class="btn btn-primary"> Salvar alterações</button>
      </div>
    </div>
  </div>
</div>



    <hr>
<!--cadastro de  tipo produto-->
    <h4 class="mb-3">Cadastrar Tipo de Produto</h4>

    <form>
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control"  placeholder="Digite o nome do tipo">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
             <input type="text" class="form-control" placeholder="Digite a descrição ">
        </div>

        <button type="button" class="btn btn-primary">
  Salvar
</button>

    </form>
    <br>
    <a href="/admin">Voltar</a>

</div>

@endsection