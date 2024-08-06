<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PONTO A PONTO</title>
    @vite(['resources/js/app.js'])
</head>
<body class="body">
    <div class="container py-5">
    <div class="container text-center py-5">
        @component('navbar')
        @endcomponent
    </div>
        <main role="main" class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>
</body>
</html>