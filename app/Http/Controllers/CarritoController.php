<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de tener el modelo Producto importado

class CarritoController extends Controller
{

    public function index()
    {
        // Obtener los productos del carrito desde la sesión
        $carrito = session('carrito', []);

        // Retornar la vista del carrito con los productos
        return view('productos.carrito', compact('carrito'));
    }

    // Mostrar el carrito de compras
    // public function mostrar()
    //{
    //    $carrito = session()->get('carrito', []); // Recupera el carrito desde la sesión
    //    return view('productos.carrito', compact('carrito')); // Envía los datos del carrito a la vista
    // }

    // Agregar un producto al carrito
    public function agregar(Request $request)
    {
        // Validar que se envíe el ID del producto
        $request->validate([
            'id' => 'required|integer|exists:productos,id', // Asegura que el ID exista en la tabla productos
        ]);

        // Buscar el producto en la base de datos
        $producto = Producto::find($request->id);
        $carrito = session()->get('carrito', []);

        if (!$producto) {
            return back()->with('error', 'El producto no existe.');
        }

        // Recuperar el carrito desde la sesión o inicializarlo vacío
        //$carrito = session()->get('carrito', []);

        // Si el producto ya está en el carrito, aumentar la cantidad
        if (isset($carrito[$producto->id])) {
            $carrito[$producto->id]['cantidad']++;
        } else {
            // Si no está, agregarlo al carrito
            $carrito[$producto->id] = [
                'id' => $producto->id,
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'imagen' => $producto->imagen, // Asegúrate de que el modelo Producto tenga un atributo "imagen"
                'cantidad' => 1,
            ];
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        // Redirigir al usuario con un mensaje de éxito
        return back()->with('success', 'Producto agregado al carrito.');
    }

    // Actualizar la cantidad de un producto en el carrito
    public function actualizar(Request $request)
    {
        $producto = $request->validate([
            'id' => 'required|integer',
            'cantidad' => 'required|integer|min:1',
        ]);

        // Recuperar el carrito desde la sesión
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$request->input('id')])) {
            $carrito[$request->input('id')]['cantidad'] = $request->input('cantidad'); // Acceso corregido
            session()->put('carrito', $carrito);
        }

        return redirect()->route('carrito')->with('success', 'Cantidad actualizada correctamente.');
    }

    // Eliminar un producto del carrito
    public function eliminar(Request $request)
    {
        $productoId = $request->validate(['id' => 'required|integer'])['id'];

        // Recuperar el carrito desde la sesión
        $carrito = session()->get('carrito', []);

        unset($carrito[$productoId]); // Eliminar el producto del carrito

        session()->put('carrito', $carrito);

        return redirect()->route('carrito')->with('success', 'Producto eliminado del carrito.');
    }

    // Procesar la compra
    public function procesarCompra()
    {
        // Aquí puedes agregar la lógica para procesar la compra, como guardarla en la base de datos

        // Limpiar el carrito de la sesión después de la compra
        session()->forget('carrito');

        return redirect()->route('carrito')->with('success', 'Compra procesada exitosamente.');
    }
}
