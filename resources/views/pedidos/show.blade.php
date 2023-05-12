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
        <h1 class="display-6">Detalle del Pedido</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $pedido->id_pedido }}</td>
                </tr>
                <tr>
                    <th>Cliente</th>
                    <td>{{ $pedido->cliente->nombre }} {{ $pedido->cliente->apellido}}</td>
                </tr>
                <tr>
                    <th>Fecha Pedido</th>
                    <td>{{ $pedido->fechaPedido }}</td>
                </tr>
                <tr>
                    <th>Fecha Entrega</th>
                    <td>{{ $pedido->fechaEntrega }}</td>
                </tr>
                <tr>
                    <th>Observaciones</th>
                    <td>{{ $pedido->Observaciones }}</td>
                </tr>
            </tbody>
        </table>
    
        <a href="{{ route('pedidos.edit', $pedido->id_pedido) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
</body>
</html>
