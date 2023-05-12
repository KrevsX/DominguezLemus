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
        <h1 class="display-6">Crear Nuevo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="nombre" required>
        
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="apellido" required>
        
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="text" class="form-control form-control-sm" placeholder="AA/MM/DD" type="text" aria-label=".form-control-sm example" style="width: 200px;" name="fechaNac" required>
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <form action="{{ route('clientes.index') }}">
                @csrf
                <button type="submit" class="btn btn-danger" >Volver</button>
            </form>
        </form>
      </div>
</body>
</html>