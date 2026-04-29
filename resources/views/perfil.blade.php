@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

<div class="container container-box">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Perfis</h2>
        
    </div>

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
            <tr>
                <td>1</td>
                <td>Larissa</td>
                <td>larissa@email.com</td>
                <td>
                   
           <button type="button" class="btn btn-warning btn-sm"
  data-bs-toggle="modal"
  data-bs-target="#modalEditar"> 
  Editar
</button>
          <button type="button" class="btn btn-danger btn-sm"   >Excluir</button>
      
                </td>
            </tr>
        </tbody>
    </table>
<div class="modal fade" id="modalEditar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="mb-3">
            <label>Nome</label>
            <input 
                type="text" 
                class="form-control" 
                placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input 
                type="email" 
                class="form-control" 
                placeholder="Digite o email">
        </div>

        <div class="mb-3">
            <label>Senha</label>
            <input 
                type="password" 
                class="form-control" 
                placeholder="Digite a senha">
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
        <button type="button" class="btn btn-primary">
          Salvar alterações
        </button>
      </div>
    </div>
  </div>
</div>
  
    <hr>

    <h4 class="mb-3">Cadastrar Perfil</h4>

    <form>
        <div class="mb-3">
            <label>Nome</label>
            <input 
                type="text" 
                class="form-control" 
                placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input 
                type="email" 
                class="form-control" 
                placeholder="Digite o email">
        </div>

        <div class="mb-3">
            <label>Senha</label>
            <input 
                type="password" 
                class="form-control" 
                placeholder="Digite a senha">
        </div>

       <button type="button" class="btn btn-primary">
  Salvar
</button>

    </form>
    <br>
    <a href="/admin">Voltar</a>

</div>

@endsection