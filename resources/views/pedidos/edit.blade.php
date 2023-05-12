<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <title>Editar Cliente</title>
<style>
    html,body{
    margin: 0;
    animation-name: fondo;
	animation-duration: 20s;
	animation-iteration-count: infinite;

    }
    @keyframes fondo {
            0% { background: #eff4fa;}
            25% { background: #cecdcf;}
            50% { background: #c9c2c9;}
            75% { background: #a7a5a5;}
            100% { background: #bec0c4;}
        }
    }
    h1,h2,p{
    color: #AAF0D1;
    }


</style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="display-6">Editar Pedido</h1>

        <form action="{{ route('pedidos.update', $pedido->id_pedido) }}" method="POST">
            @csrf
            @method('PUT')
    
            <!-- Campos del formulario para editar el pedido -->
            <div class="form-group">
                <label for="fechaPedido">Fecha Pedido</label>
                <input type="datetime-local" class="form-control" name="fechaPedido" value="{{ $pedido->fechaPedido }}" required>
            </div>
            <div class="form-group">
                <label for="fechaEntrega">Fecha Entrega</label>
                <input type="datetime-local" class="form-control" name="fechaEntrega" value="{{ $pedido->fechaEntrega }}" required>
            </div>
            <div class="form-group">
                <label for="Observaciones">Observaciones</label>
                <textarea class="form-control" name="Observaciones" rows="3" required>{{ $pedido->Observaciones }}</textarea>
            </div>
            <div class="form-group">
                <label for="id_cliente">Nombre</label>
                <select class="form-control" name="id_cliente" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id_cliente }}" {{ $pedido->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_cliente">Apellido</label>
                <select class="form-control" name="id_cliente" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id_cliente }}" {{ $pedido->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>{{ $cliente->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <br>    
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
</body>
</html>