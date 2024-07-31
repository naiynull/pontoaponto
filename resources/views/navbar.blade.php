<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo de Navbar Bootstrap</title>

  <!-- CSS do Bootstrap (coloque isso no head do seu HTML) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery (coloque isso antes do JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- JavaScript do Bootstrap (coloque isso antes do fechamento da tag body) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <style>
    .navbar-nav .nav-link {
      padding-right: 20px; /* Espaçamento entre os links */
    }

    :root {
      --jumbotron-padding-y: 3rem;
    }
    
    .jumbotron {
      padding-top: var(--jumbotron-padding-y);
      padding-bottom: var(--jumbotron-padding-y);
      margin-bottom: 0;
      background-color: #fff;
    }
    
    @media (min-width: 768px) {
      .jumbotron {
        padding-top: calc(var(--jumbotron-padding-y) * 2);
        padding-bottom: calc(var(--jumbotron-padding-y) * 2);
      }
    }
    
    .jumbotron p:last-child {
      margin-bottom: 0;
    }
    
    .jumbotron-heading {
      font-weight: 300;
    }
    
    .jumbotron .container {
      max-width: 40rem;
    }
    
    footer {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
    
    footer p {
      margin-bottom: .25rem;
    }

    .row {
      padding-top: 6rem;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
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
            <a class="nav-link" href="#">Roupas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acessórios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Decorações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Amigurumis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Itens para Pet</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Instagram</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Whatsapp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">E-mail</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container">
      <h1 class="jumbotron-heading">Feito com carinho, para você se encantar com cada ponto</h1>
      <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula nulla
        in magna varius vehicula. Nulla quis ante nisl. Nulla facilisi.</p>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-8 col-md-7 py-4">
        <h4><a href="#" class="text-dark">Roupas</a></h4>
        <h4><a href="#" class="text-dark">Acessórios</a></h4>
        <h4><a href="#" class="text-dark">Decorações</a></h4>
        <h4><a href="#" class="text-dark">Amigurumis</a></h4>
        <h4><a href="#" class="text-dark">Itens para Pet</a></h4>
      </div>
      <div class="col-sm-4 offset-md-1 py-4">
        <h4 class="text-dark">Contato</h4>
        <p class="text-muted">Feito com carinho, para você se encantar com cada ponto</p>
        <ul class="list-unstyled">
          <li><a href="#" class="text-dark">Instagram</a></li>
          <li><a href="#" class="text-dark">Whatsapp</a></li>
          <li><a href="#" class="text-dark">E-mail</a></li>
        </ul>
      </div>
    </div>
  </div>

  <footer class="text-muted text-center">
    <div class="container">
      <p>&copy; 2024 Ponto a Ponto - Todos os direitos reservados</p>
    </div>
  </footer>

</body>

</html>