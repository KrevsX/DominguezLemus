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
    h1,h2,span{
        color: #AAF0D1;
        
    }
    .display-6, .display-7 {
    overflow: hidden; /* Para ocultar el texto que aún no se ha mostrado */
    border-right: .09em solid #AAF0D1; /* Simula el cursor de escritura */
    white-space: nowrap; /* Evita el salto de línea */
    margin: 0 auto; /* Centra el texto horizontalmente */
    letter-spacing: .15em; /* Espaciado entre letras */
    animation:
        escribir 3s steps(40, end),
        parpadear .5s step-end infinite alternate; /* Animaciones */
    }

    @keyframes escribir {
    from { width: 0; }
    to { width: 100%; }
    }
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    * {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }

    .navMenu {
    position: absolute;
    top: 5%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    }

    .navMenu a {
    color: #f6f4e6;
    text-decoration: none;
    font-size: 1.1em;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
    width: 150px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    }

    .navMenu a:hover {
    color: #fddb3a;
    }

    .navMenu .dot {
    width: 6px;
    height: 6px;
    background: #fddb3a;
    border-radius: 50%;
    opacity: 0;
    -webkit-transform: translateX(30px);
    transform: translateX(30px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    }

    .navMenu a:nth-child(1):hover ~ .dot {
    -webkit-transform: translateX(35px);
    transform: translateX(35px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    opacity: 1;
    }

    .navMenu a:nth-child(2):hover ~ .dot {
    -webkit-transform: translateX(185px);
    transform: translateX(185px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    opacity: 1;
    }

    .navMenu a:nth-child(3):hover ~ .dot {
    -webkit-transform: translateX(350px);
    transform: translateX(350px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    opacity: 1;
    }

    .navMenu a:nth-child(4):hover ~ .dot {
    -webkit-transform: translateX(535px);
    transform: translateX(535px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    opacity: 1;
    }


</style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <nav class="navMenu">
                <a href="{{ route('clientes.index')}}">Clientes</a>
                <a href="{{ route('pedidos.index')}}">Pedidos</a>
                <a href="{{ route('articulos.index')}}">Articulos</a>
                <a href="{{ route('detalle_pedidos.index')}}">Detalle Pedidos</a>
                <div class="dot"></div>
              </nav>
        </header>
    </div>
    <br><br><br>

    <div class="container-fluid">
        <h1 class="display-6">{{ $intro}}</h1>
        <hr>
        <h2 class="display-6">{{ $nombreJ}}</h2>
        <h2 class="display-6"> {{ $carnetJ }}</h2>
        <hr>
        <h2 class="display-6">{{ $nombreK}}</h2>
        <h2 class="display-6"> {{ $carnetK }}</h2>
        <hr>
        <h2 class="display-6">{{ $grupo }}</h2>
      </div>
</body>
</html>