<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4">Realizar Venta</h2>

    <form method="POST" action="{{ route('guardar.venta') }}">
        @csrf
        <div class="mb-3">
            <label for="codigoProducto" class="form-label">Código de Producto:</label>
            <input type="text" class="form-control" id="codigoProducto" placeholder="Código de Producto" name="codigoProducto">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Fecha:</label>
            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name="fecha">
        </div>
        <button type="submit" class="btn btn-primary">Realizar Venta</button>
    </form>
</div>

</body>
</html>
