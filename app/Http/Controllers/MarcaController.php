<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MarcaController extends Controller
{
    /**
     * Muestra una lista de todas las marcas.
     */
    public function index()
    {
        return response()->json(Marca::all());
    }

    /**
     * Almacena una nueva marca en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|unique:marcas,nombre'
        ]);

        $marca = Marca::create($request->all());

        return response()->json($marca, Response::HTTP_CREATED);
    }

    /**
     * Muestra una marca específica.
     */
    public function show(Marca $marca)
    {
        return response()->json($marca);
    }

    /**
     * Actualiza una marca existente.
     */
    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre' => 'required|string|unique:marcas,nombre,' . $marca->id
        ]);

        $marca->update($request->all());

        return response()->json($marca);
    }

    /**
     * Elimina una marca de la base de datos.
     */
    public function destroy(Marca $marca)
    {
        $marca->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}