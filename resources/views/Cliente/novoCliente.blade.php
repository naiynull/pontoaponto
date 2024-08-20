@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center form-heading">Cadastrar Novo Cliente</h1>
            <form action="{{route('gravaNovoCliente')}}" method="POST" id="client-form">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nomecliente" placeholder="Nome do Cliente" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="emailcliente" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefonecliente" placeholder="Telefone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" name="enderecocliente" placeholder="Rua dos Bobos, nº 0" required>
                </div>

                <button type="submit" id="enviar" class="btn">Cadastrar Cliente</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
