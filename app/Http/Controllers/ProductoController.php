<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function inicio() {
        return view('welcome');
    }

    public function crearProducto(){
        return view('crearProducto');
    }

    public function guardarProducto(Request $request){
        

        $producto = new Producto();
        $producto->codigoProducto = $request->input('codigoProducto');
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        return redirect()->route('inicio');
    }

    
    public function verProductos(){

        $productos = Producto::all();

        return view('verProductos', compact('productos'));
    }

    public function guardarVenta(Request $request){

            // Validar los datos del formulario (aquí puedes agregar reglas de validación según tus necesidades)

        // Recuperar el producto relacionado con el código proporcionado
        $producto = Producto::where('codigoProducto', $request->input('codigoProducto'))->first();

        if ($producto) {
            // Calcular el subtotal (precioProducto * cantidad)
            $subtotal = $producto->precio * $request->input('cantidad');

            // Calcular el ISV (Impuesto Sobre Ventas)
            $isv = $subtotal * 0.15;

            // Calcular el total (subtotal + ISV)
            $total = $subtotal + $isv;

            // Guardar la venta en la base de datos
            $venta = new Venta();
            $venta->codigoProducto = $request->input('codigoProducto');
            $venta->cantidad = $request->input('cantidad');
            $venta->fechaVenta = $request->input('fecha');
            $venta->subtotal = $subtotal;
            $venta->isv = $isv;
            $venta->total = $total;
            $venta->save();

            // Redireccionar a la vista inicio
            return redirect()->route('inicio')->with('success', 'Venta guardada correctamente.');
        } else {
            // Si no se encuentra el producto, mostrar un mensaje de error
            return redirect()->back()->with('error', 'El producto no fue encontrado.');
        }
    }

    public function realizarVenta(){


        return view('realizarVenta');
    }


    public function verVentas(){

        $ventas = Venta::all();
        
        return view('verVentas', compact('ventas'));
    }
}
