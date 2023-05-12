<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <title>Articulos</title>
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
        <h1 class="display-6">Lista de Articulos</h1>
        <table>
            <tr>
                <td>
                    <form action="{{ route('articulos.create') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary mb-3">Crear Nuevo Ariculo</button>
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
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad en Inventario</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->id_articulo }}</td>
                        <td>{{ $articulo->nombre }}</td>
                        <td>{{ $articulo->descripcion }}</td>
                        <td>{{ $articulo->cantInventario }}</td>
                        <td>$ {{ $articulo->precio }}</td>
                        <td>
                            <a href="{{ route('articulos.show', $articulo->id_articulo) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{ route('articulos.edit', $articulo->id_articulo) }}" class="btn btn-sm btn-success">Editar</a>
                            <form action="{{ route('articulos.destroy', $articulo->id_articulo) }}" method="POST" class="d-inline">
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
