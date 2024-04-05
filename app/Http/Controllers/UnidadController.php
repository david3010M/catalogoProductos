<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidades = Unidad::paginate(10);
        return view('unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:unidads',
            'abreviatura' => 'required|string|max:10|unique:unidads',
        ]);


        // Crear el objeto Unidad
        $unidad = new Unidad();
        $unidad->descripcion = $request->descripcion;
        $unidad->abreviatura = $request->abreviatura;

        $unidad->save();

        return redirect()->route('unidades.index')->with('message', 'Unidad creada correctamente')->with('action', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unidad = Unidad::findOrFail($id);
        return view('unidades.show', compact('unidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unidad = Unidad::findOrFail($id);
        return view('unidades.update', compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos
        $request->validate([
            'descripcion' => 'required|string|max:255|unique:unidads,descripcion,' . $id,
            'abreviatura' => 'required|string|max:10|unique:unidads,abreviatura,' . $id,
        ]);

        // Crear el objeto Unidad
        $unidad = Unidad::findOrFail($id);
        $unidad->descripcion = $request->descripcion;
        $unidad->abreviatura = $request->abreviatura;

        $unidad->update();

        return redirect()->route('unidades.index')->with('message', 'Unidad actualizada correctamente')->with('action', 'success');
    }

    public function delete(string $id)
    {
        $unidad = Unidad::findOrFail($id);
        return view('unidades.delete', compact('unidad'));
    }


    public function destroy(string $id)
    {
        $unidad = Unidad::findOrFail($id);
        try {
            $unidad->delete();
        } catch (\Exception $e) {
            return redirect()->route('unidades.index')->with('message', 'No se puede eliminar la unidad porque tiene productos asociados.')->with('action', 'error');
        }
        return redirect()->route('unidades.index')->with('message', 'Unidad eliminada correctamente')->with('action', 'deleted');
    }
}
