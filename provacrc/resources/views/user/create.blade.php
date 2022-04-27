@extends('layout.welcome')

@section('title', 'Create')

@section('content')

<div class="container">
    <p class="h1">Create</p>
    <form action="/users" method="POST" class="form-control">
        @csrf 
        @method('POST')
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" require>
            <label for="">Cargo</label>
            <input type="text" name="cargo" id="cargo" class="form-control" require>
            <label for="">Matricula</label>
            <input type="number" name="matricula" id="matricula" class="form-control"require>
            <button class="btn btn-success mt-2">Criar</button>
    </form>
</div>


@endsection