<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductoController extends Controller
{
    /**
     * Muestra una lista de todos los productos.
     */
    public function index()
    {
        // Devolvemos todos los productos junto con su marca asociada
        return response()->json(Producto::with('marca')->get());
    }

    /**
     * Almacena un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'marca_id' => 'required|exists:marcas,id'
        ]);

        $producto = Producto::create($request->all());

        return response()->json($producto, Response::HTTP_CREATED);
    }

    /**
     * Muestra un producto específico.
     */
    public function show(Producto $producto)
    {
        // Devolvemos un producto específico junto con su marca
        return response()->json($producto->load('marca'));
    }

    /**
     * Actualiza un producto existente.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'marca_id' => 'required|exists:marcas,id'
        ]);

        $producto->update($request->all());

        return response()->json($producto);
    }

    /**
     * Elimina un producto.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}