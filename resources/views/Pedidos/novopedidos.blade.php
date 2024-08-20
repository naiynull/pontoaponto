@extends('layout')

@section('content')
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center form-heading">Cadastrar Pedidos</h1>
            <form action="{{ route('gravaNovoPedido') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="clientes">Cliente</label>
                        <select name="clientes" id="clientes" class="form-control">
                            @foreach ($dados as $item)
                                <option value="{{$item->id}}">{{$item->nomecliente}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date" name="datapedido">
                    </div>
                </div>
                
                <button type="submit" id="enviar" class="btn">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
