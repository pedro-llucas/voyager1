@extends('layout.welcome')

@section('title', 'Home')

@section('content')
<div class="container">
    <p class="h1" id="titulos">Lista de Usuários</p>
    <table class="table" id="table-index">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Matricula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $dado)
                <tr>
                    <td>{{$dado->nome}}</td>
                    <td>{{$dado->cargo}}</td>
                    <td>{{$dado->matricula}}</td>
                    <td id="btn-acoes">
                        <a href="/users/{{$dado->id}}/edit">
                            <button class="btn btn-warning">Editar</button>
                        </a>
                        <form action="/users/{{$dado->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Deletar  </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/users/create" class="btn btn-dark">Criar Novo</a>
</div>
