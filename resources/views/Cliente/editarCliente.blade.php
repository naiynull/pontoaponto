@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO CLIENTE</h1>
            </div>
        </div>
        <form action="/cliente/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Endereço:</label>
                <input type="text" class="form-control" name="enderecocliente" 
                       value="{{$dados->enderecocliente}}">
            </div>
            <div class="form-group">
                <label for="nome">Telefone:</label>
                <input type="text" class="form-control" name="telefonecliente" 
                       value="{{$dados->telefonecliente}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection