<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Consultar todos los productos 
        return response()->json(Producto::all(), 200); //200:OK
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar datos de producto 
        $datos = $request->validate([
            'nombre' =>['required', 'string', 'max:100' ],
            'descripcion' =>['nullable', 'string', 'max:255'],
            'precio'=>['required', 'integer', 'min:1000'],
            'stock'=>['required', 'integer', 'min:1'],
        ]);

        //Guardar datos 
        $producto = Producto::create($datos);

        //Respuesta al cliente 
        return response()->json(['success' => true, 'message' => 'Producto creado'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)    
    {
        //Consultar un producto 
        return response()->json($producto, 200);//200:OK
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //Validar datos de entrada 
        $datos = $request->validate([
            'nombre' =>['required', 'string', 'max:100' ],
            'descripcion' =>['nullable', 'string', 'max:255'],
            'precio'=>['required', 'integer', 'min:1000'],
            'stock'=>['required', 'integer', 'min:1'],
        ]);

        //Actualizar producto
        $producto->update($datos);

        //Respuesta al cliente 
        return response()->json(['success' => true, 'message' => 'Producto actualizado'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //Eliminar producto 
        $producto->delete();

        //Respuesta al cliente 
        return response()->json(['success' => true, 'message' => 'Producto eliminado'], 200);
    }
}