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
        <h1 class="display-6">Edicion de Datos.</h1>
        <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre:</label>
            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="nombre" value="{{ $cliente->nombre }}" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="apellido" value="{{ $cliente->apellido }}" required>
            <br>       
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="fechaNac" value="{{ $cliente->fechaNac }}" required>
            <br>        
            <button type="submit"class="btn btn-success">Guardar</button>
        </form>
        <br>
        
        <a href="{{ route('clientes.index') }}">Volver</a>
      </div>
</body>
</html>