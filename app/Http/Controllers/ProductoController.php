<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Recupera todos los productos de la base de datos 
        $productos = Producto::all();

        //Retorna la vista de 'Productos.index' con los productos 
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Este metodo llama la vista create.blade.php
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Este método envía los datos del formulario al servidor para ser guardados y redirecciona a la vista index
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //Este método llama a la vista edit.blade.php
        return view("productos.edit", compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //Este método envía los datos del formulario al servidor para ser para ser actualizados, y redirecciona a la vista index.
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //Este método elimina un producto de la base de datos y redirecciona a la vista index.
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
