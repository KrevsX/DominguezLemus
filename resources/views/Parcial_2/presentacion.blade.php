<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <title>{{$titulo}}</title>
<style>
    html,body{
    margin: 0;
    animation-name: fondo;
	animation-duration: 20s;
	animation-iteration-count: infinite;

    }
    @keyframes fondo{
  0%{ background: #01142c;}
  25%{ background: #190233;}
  50%{ background: #270f27;}
  75%{ background: #270202;}
  100%{ background: #01142c;}
    }
    h1,h2,p{
    color: #AAF0D1;
    }


</style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="display-5">{{ $intro}}</h1>
        <hr>
        <h2 class="display-6">{{ $nombreJ}}</h2>
        <h2 class="display-6"> {{ $carnetJ }}</h2>
        <hr>
        <h2 class="display-6">{{ $nombreK}}</h2>
        <h2 class="display-6"> {{ $carnetK }}</h2>
        <hr>
        <p class="display-6">{{ $grupo }}</p>
      </div>
      <div class="container-fluid">
        <li class="nav-item">    
            <a class="nav-link" href="{{ route('clientes.index')}}">Clientes</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('articulos.index')}}">Articulos</a>
        </li>
        <li class="nav-item">    
            <a class="nav-link" href="{{ route('pedidos.index')}}">Pedidos</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('detalle_pedidos.index')}}">Detalle de Pedidos</a>
        </li>
      </div>
</body>
</html>