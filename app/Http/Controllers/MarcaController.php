<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::orderBy('created_at', 'desc')->paginate(10);
        return view('marcas.index', compact('marcas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marcas.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:marcas',
        ]);

        // Crear el objeto Marca
        $marca = new Marca();
        $marca->descripcion = $request->descripcion;

        $marca->save();

        return redirect()->route('marcas.index')->with('message', 'Marca creada correctamente')->with('action', 'success');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.show', compact('marca'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.update', compact('marca'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:marcas,descripcion,' . $id,
        ]);

        // Modificar el objeto Marca
        $marca = Marca::findOrFail($id);
        $marca->descripcion = $request->descripcion;

        $marca->update();
        return redirect()->route('marcas.index')->with('message', 'Marca actualizada correctamente')->with('action', 'success');
    }


    public function delete($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.delete', compact('marca'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        try {
            $marca->delete();
        } catch (\Exception $e) {
            return redirect()->route('marcas.index')->with('message', 'No se puede eliminar la marca porque tiene productos asociados.')->with('action', 'error');
        }
        return redirect()->route('marcas.index')->with('message', 'Marca eliminada correctamente')->with('action', 'deleted');
    }
}
