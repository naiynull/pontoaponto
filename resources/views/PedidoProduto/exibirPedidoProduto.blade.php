@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Detalhes do Pedido</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome do Cliente</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Data</th>
                        <th style="text-align:center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$dados->nomecliente }}</td>
                        <td>{{ $item->nomeproduto }}</td>
                        <td>{{ $item->quant}}</td>
                        <td>{{ $item->dataproduto }}</td>
                        <td style="text-align:center">
                            <a href="/PedidoProduto/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @empty 
                        <tr>
                            <td style="text-align:center" colspan="4">Não há detalhes a serem mostrados</td>                            
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
@endsection