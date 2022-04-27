@extends('layout.welcome')

@section('title', 'Edit')

@section('content')

<div class="container">
    <form action="/users/{{$dado->id}}" method="POST" class="form-control">
        @csrf 
        @method('PUT')
        <p class="h1">Editar</p>
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$dado->nome}}" class="form-control">
        <label for="">Cargo</label>
        <input type="text" name="cargo" id="cargo" value="{{$dado->cargo}}" class="form-control">
        <label>Cargo</label>
        <input type="text" name="cargo" id="cargo" value="{{$dado->matricula}}" class="form-control">
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
</div>

@endsection