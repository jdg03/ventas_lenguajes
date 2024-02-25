<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4">Lista de Ventas</h2>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Código de Venta</th>
                <th scope="col">Código de Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
                <th scope="col">ISV</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha de Venta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->codigo }}</td>
                    <td>{{ $venta->codigoProducto }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>{{ $venta->subtotal }}</td>
                    <td>{{ $venta->isv }}</td>
                    <td>{{ $venta->total }}</td>
                    <td>{{ $venta->fechaVenta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
