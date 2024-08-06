<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>

  <!-- CSS do Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- JavaScript do Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Adicione seus estilos personalizados aqui */
  </style>
</head>

<body>
  <nav class="navbar navbar-dark fixed-top shadow-sm">
    <div class="container">
      <img src="{{ asset('storage/imagens/logo1.png') }}" id="logo1" alt="Logo" style="height: 40px;">
      <a class="navbar-brand" href="#">
        <strong>PONTO A PONTO</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarHeader">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pedidos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('novoProduto')}}">Cadastrar Produto</a>
              <a class="dropdown-item" href="{{route('exibeProduto')}}">Exibir Produtos</a>
              <a class="dropdown-item" href="#">Algo mais aqui</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</body>
</html>
