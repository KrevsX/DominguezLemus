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
        <h1 class="display-6">Detalles del Artículo</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $articulo->nombre }}</h5>
                <p class="card-text">Descripción: {{ $articulo->descripcion }}</p>
                <p class="card-text">Cantidad en Inventario: {{ $articulo->cantInventario }}</p>
                <p class="card-text">Precio: $ {{ $articulo->precio }}</p>
            </div>
        </div>

        <a href="{{ route('articulos.index') }}" class="btn btn-primary mt-3">Volver</a>
      </div>
</body>
</html>
