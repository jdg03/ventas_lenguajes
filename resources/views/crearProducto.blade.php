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

    <div class="container">
        <form method="POST" action="{{ route('guardar.producto') }}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="codigoProducto" class="form-label">Código de Producto:</label>
            <input type="text" class="form-control" id="codigoProducto" placeholder="Código de Producto" name="codigoProducto">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" class="form-control" id="precio" placeholder="Precio del Producto" name="precio">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" class="form-control" id="stock" placeholder="Stock del Producto" name="stock" value="0">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>
    
    </div>
</body>
</html>
