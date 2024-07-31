@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="card-body py-4">
        <h5 class="card-title" style="text-align: center">Cadastro de Cliente</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th style="text-align:center" colspan="4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nomecliente }}</td>
                        <td>{{ $item->emailcliente }}</td>
                        <td>{{ $item->telefonecliente }}</td>
                        <td>{{ $item->enderecocliente }}</td>
                        <td style="text-align:center">
                            <a href="/novoAutorLivro/{{$item->id}}" class="btn btn-success">Cadastra Cliente</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/cliente/{{ $cliente->id }}/edit" class="btn btn-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <form action="/cliente/{{ $cliente->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</button>
                            </form>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
</div>