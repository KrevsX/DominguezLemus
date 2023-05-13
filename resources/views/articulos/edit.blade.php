<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <title>Editar Articulo</title>
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
        <h1 class="display-6 ">Editar Artículo</h1>
        <form action="{{ route('articulos.update', $articulo->id_articulo) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $articulo->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3" required>{{ $articulo->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="cantInventario">Cantidad en Inventario</label>
                <input type="number" class="form-control" name="cantInventario" value="{{ $articulo->cantInventario }}" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" value="{{ $articulo->precio }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <form action="{{ route('articulos.index') }}">
                @csrf
                <button button type="submit" class="btn btn-danger" >Volver</button>
        </form>
        </form>
      </div>
</body>
</html>
