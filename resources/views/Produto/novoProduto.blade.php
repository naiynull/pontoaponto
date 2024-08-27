@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center form-heading">Cadastrar Novo Produto</h1>
            <form action="{{route('gravaNovoProduto')}}" method="POST" id="product-form">
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nomeproduto" placeholder="Nome do Produto" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="estoque">Estoque</label>
                        <input type="number" class="form-control" id="estoque" name="estoqueproduto" placeholder="Quantidade em Estoque" required>
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="preco">Preço</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control" id="preco" name="precoproduto" placeholder="Preço do Produto" required>
                        </div>
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="material">Material</label>
                        <select class="custom-select" id="inputGroupSelect01" name="materialproduto">
                            <option selected>Escolha o Material</option>
                            <option value="Lã">Lã</option>
                            <option value="Fio de malha">Fio de malha</option>
                            <option value="Barbante">Barbante</option>
                            <option value="Fio poliéster">Fio poliéster</option>
                            <option value="Algodão">Algodão</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">

                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricaoproduto" rows="3" placeholder="Descrição do Produto" required></textarea>
                    
                </div>
                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categoria">
                        <option selected>Escolha a Categoria</option>
                        <option value="Acessorio">Acessorio</option>
                        <option value="Roupas">Roupas</option>
                        <option value="Decorações">Decorações</option>
                        <option value="Produtos para Bebês e Crianças">Produtos para Bebês e Crianças</option>
                        <option value="Produtos sazonais">Produtos sazonais</option>
                        <option value="Itens para Pet">Itens para Pet</option>
                        <option value="Amigurumis">Amigurumis</option>
                    </select>

                </div>

                <button type="submit" id="enviar" class="btn" id="botao">Cadastrar Produto</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
