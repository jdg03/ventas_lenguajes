<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
</head>
<body>
    <style>
        /* Estilos para centrar vertical y horizontalmente */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="container">
        <a href="{{ route('crear.producto') }}" class="btn btn-primary">Guardar Producto</a>
        <a href="{{ route('ver.productos') }}" class="btn btn-primary">Ver Productos</a>
        <a href="{{ route('realizar.venta') }}" class="btn btn-primary">realizar Venta</a>
        <a href="{{ route('ver.ventas') }}" class="btn btn-primary">Ver Ventas</a>
    </div>
</body>
</html>
