<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pedidos</title>
    <style>
        html, body {
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

        h1, h2, p, {
            color: #AAF0D1;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1 class="display-6">Listado de Pedidos</h1>
        <table>
            <tr>
                <td>
                    <form action="{{ route('pedidos.create') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Crear Pedido</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('presentacion') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Inicio</button>
                    </form>
                </td>
                <td>
                </td>
            </tr>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Pedido</th>
                    <th>Fecha Entrega</th>
                    <th>Observaciones</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id_pedido }}</td>
                        <td>{{ $pedido->fechaPedido }}</td>
                        <td>{{ $pedido->fechaEntrega }}</td>
                        <td>{{ $pedido->Observaciones }}</td>
                        <td>{{ $pedido->cliente->nombre }}</td>
                        <td>{{ $pedido->cliente->apellido}}</td>
                        <td>
                            <a href="{{ route('pedidos.show', $pedido->id_pedido) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{ route('pedidos.edit', $pedido->id_pedido) }}" class="btn btn-sm btn-success">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>

</html>
