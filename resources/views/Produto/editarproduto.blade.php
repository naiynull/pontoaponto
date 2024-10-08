@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PRODUTO</h1>
            </div>
        </div>
        <form action="/Produto/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Estoque:</label>
                <input type="text" class="form-control" name="estoqueproduto" 
                       value="{{$dados->estoqueproduto}}">
            </div>
            <div class="form-group">
                <label for="nome">Preço:</label>
                <input type="text" class="form-control" name="precoproduto" 
                       value="{{$dados->precoproduto}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection