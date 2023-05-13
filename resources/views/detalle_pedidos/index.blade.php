<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <title>Detalle Pedidos</title>
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
        <h1 class="display-6">Lista de Detalle de Pedidos</h1>
        <table>
            <tr>
                <td>
                   <form action="{{ route('presentacion') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Inicio</button>
                    </form>
                </td>
            </tr>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cantidad</th>
                    <th>Descuento</th>
                    <th>ID Pedido</th>
                    <th>ID Artículo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detallePedidos as $detallePedido)
                    <tr>
                        <td>{{ $detallePedido->id_detalle_pedido }}</td>
                        <td>{{ $detallePedido->cantidad }}</td>
                        <td>{{ $detallePedido->descuento }}</td>
                        <td>{{ $detallePedido->id_pedido }}</td>
                        <td>{{ $detallePedido->id_articulo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
</body>
</html>
