@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            margin-top: 60px; /* Aumenta a margem para afastar da navbar */
            padding: 20px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 800px; /* Define a largura máxima para centralizar melhor */
            margin-left: auto;
            margin-right: auto; /* Centraliza horizontalmente */
        }
        .form-heading {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center form-heading">Cadastrar Novo Produto</h1>
            <form id="product-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Produto" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estoque">Estoque</label>
                        <input type="number" class="form-control" id="estoque" name="estoque" placeholder="Quantidade em Estoque" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="material">Material</label>
                        <input type="text" class="form-control" id="material" name="material" placeholder="Material do Produto" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Descrição do Produto" required></textarea>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
