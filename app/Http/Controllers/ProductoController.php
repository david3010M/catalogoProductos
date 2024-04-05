<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Unidad;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        // return $productos;
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $unidades = Unidad::all();
        return view('productos.create', compact('categorias', 'marcas', 'unidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id' => 'required|exists:marcas,id',
            'unidad_id' => 'required|exists:unidades_de_medida,id',
            'precio_compra' => 'required|numeric|min:0',
            'precio_venta' => 'required|numeric|min:0',
        ], [
            'categoria_id.exists' => 'La categoría seleccionada no es válida.',
            'marca_id.exists' => 'La marca seleccionada no es válida.',
            'unidad_id.exists' => 'La unidad de medida seleccionada no es válida.',
        ]);

        // Crea un nuevo producto
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id = $request->marca_id;
        $producto->unidad_sid = $request->unidad_id;
        $producto->precio_compra = $request->precio_compra;
        $producto->precio_venta = $request->precio_venta;

        return $producto;
        $producto->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('productos.index')->with('mensaje', 'Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
