@extends('layouts.logoApp')

@section('content')

<link rel="stylesheet" href="{{ asset('css/menuAdmin.css') }}">

<div class="menu-centralizado">
    <div class="menu-box">

        <h4 class="painel-titulo">Painel Administrador</h4>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link menu-lateral">
                    Gerenciar Perfil
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('produto.index') }}" class="nav-link menu-lateral">
                    Gerenciar Produtos
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('categoriaProduto.index') }}" class="nav-link menu-lateral">
                    Gerenciar Tipos de Produtos
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('raiz') }}" class="nav-link menu-lateral voltar-btn">
                    Voltar
                </a>
            </li>

        </ul>
    </div>
</div>

@endsection