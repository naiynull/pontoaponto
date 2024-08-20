@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PEDIDO</h1>
            </div>
        </div>
        <form action="/pedido/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date" name="datapedido"
                        value="{{$dados->enderecocliente}}">
            </div>
          
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection