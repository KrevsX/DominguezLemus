<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Clientes</title>
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
        <h1 class="display-6">Listado de Clientes</h1>
        <table>
            <tr>
                <td>
                    <form action="{{ route('clientes.index') }}" method="GET" id="formClientes">
                        @csrf
                        <button type="submit" class="btn btn-success" id="btnMostrarClientes">Mostrar Clientes</button>
                    </form>
                </td>
                <td>   </td>
                <td>
                    <form action="{{ route('clientes.create') }}">
                        @csrf
                        <button type="submit" class="btn btn-success" id="btnCrearCliente">Crear Cliente Nuevo</button>
                    </form>
                </td>
            </tr>
        </table>
        <br>
        <div id="clientesContainer" style="display: none;">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id_cliente }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->fechaNac }}</td>
                            <td>
                                <a href="{{ route('clientes.show', $cliente->id_cliente) }}" class="btn btn-sm btn-primary">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente->id_cliente) }}" class="btn btn-sm btn-success">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST" style="display: inline">
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
    </div>
<script>
        document.getElementById('formClientes').addEventListener('submit', function(e) {
            e.preventDefault(); // Evita que el formulario se envíe automáticamente
    
            // Muestra el contenedor de clientes
            document.getElementById('clientesContainer').style.display = 'block';
        });
    </script>    
</body>

</html>
