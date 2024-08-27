@extends('layout')

@section('content')
<div class="container py-4">
    <div class="card border">
        <div class="card-body">
            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <h1 class="mt-5 text-center">CADASTRE UM CONTROLE</h1>
                    <h6 class="text-center">{{ $dados->nomecliente }}</h6>
                </div>
            </div>
            <form action="{{ route('gravaNovoProdutoPedido') }}" method="POST">
                @csrf
                <input type="hidden" id="pedidos_id" name="pedidos_id" value="{{ $dados->pedidos_id }}">
                
                <div class="form-group">
                    <label for="produto">Produtos</label><br />
                    <select name="produtos" id="produto" class="form-control">
                        @foreach ($dados as $item)
                            <option value="{{ $item->id }}">{{ $item->nomeproduto }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="quant">Quantidade</label>
                    <input type="text" class="form-control" id="quant" name="quant" placeholder="Quantidade do Produto" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="date">Data</label>
                    <input type="date" class="form-control" id="date" name="dataproduto">
                </div>
                
                <hr>
                
                <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
                <button type="button" onclick="window.location.href='{{ route('inicio') }}';" class="btn btn-outline-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection
