<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4">Lista de Productos</h2>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Código de Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
           
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto->codigoProducto}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->stock}}</td>
                    </tr>
                @endforeach
                
          
        </tbody>
    </table>
</div>

</body>
</html>
