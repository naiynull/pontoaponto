@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM CONTROLE</h1>
                <h6 class="text-center">{{$dados->nomecliente}}</h6>
            </div>
        </div>
        <form action="{{route('gravaNovoProdutoPedido')}}" method="POST">
            @csrf
            <input type="hidden" id="livro_id" name="livro_id" value={{$dados->livro_id}}>
            <div class="form-group">
                <label for="autor">Produtos</label><br />
                <select name="autor">
                        @foreach ($dados as $item)
                            <option value="{{$item->id}}">{{$item->nomeproduto}}</option>
                        @endforeach
                </select>
             </div>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection