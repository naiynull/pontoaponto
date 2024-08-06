@extends('layout')

@section('content')
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center form-heading">Cadastrar um Novo Pedido</h1>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobrenome">Telefone</label>
                        <input type="text" class="form-control" id="Telefone" placeholder="Telefone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="categoria">Categoria</label>
                        <select class="custom-select" id="categoria">
                            <option selected>Escolha uma categoria...</option>
                            <option value="1">Roupa</option>
                            <option value="2">Acessório</option>
                            <option value="3">Decoração</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<style>
    body {
        background-color: #f8f9fa;
    }
    .form-container {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-heading {
        margin-bottom: 20px;
    }
</style>
@endsection
