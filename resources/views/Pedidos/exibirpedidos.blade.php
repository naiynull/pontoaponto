@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Pedidos Cadastrados</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome do Cliente</th>
                        <th>Data do Pedido</th>
                        <th style="text-align:center"colspan="4">Ação</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($dados as $item => $i)
                    <tr>
                    <td>{{$i['id']}}</td>
                    <td>{{$i['cliente']['nomecliente']}}</td>
                    <td>{{$i['datapedido']}}</td>
                        <td style="text-align:center">
                            <a href="/novoPedidoProduto/{{$i['id']}}" class="btn btn-success">Cadastra Produtos</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/pedidoProduto/{{$i['id']}}" class="btn btn-secondary">Detalhes</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/pedido/editar/{{$i['id']}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/pedido/apagar/{{$i['id']}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @empty
                        <tr>
                            <td style="text-align:center" colspan="4">Não há pedidos cadastrados</td>                            
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
</div>
    <div class="card-footer">
    </div>
</div>
@endsection