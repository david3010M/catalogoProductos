<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:categorias',
        ]);

        // Crear el objeto Marca
        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        return redirect()->route('categorias.index')->with('message', 'Categoría creada correctamente')->with('action', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.update', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:categorias,descripcion,' . $id,
        ]);

        // Crear el objeto Marca
        $categoria = Categoria::findOrFail($id);
        $categoria->descripcion = $request->descripcion;

        $categoria->update();

        return redirect()->route('categorias.index')->with('message', 'Categoría actualizada correctamente')->with('action', 'success');
    }

    public function delete(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.delete', compact('categoria'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        try {
            $categoria->delete();
        } catch (\Exception $e) {
            return redirect()->route('categorias.index')->with('message', 'No se puede eliminar la categoria porque tiene productos asociados.')->with('action', 'error');
        }
        return redirect()->route('categorias.index')->with('message', 'Categoria eliminada correctamente')->with('action', 'deleted');
    }
}
