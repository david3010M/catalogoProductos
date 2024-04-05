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
        $productos = Producto::orderBy('created_at', 'desc')->paginate(10);
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
            'nombre' => 'required|string|max:255|unique:productos',
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id' => 'required|exists:marcas,id',
            'unidad_id' => 'required|exists:unidads,id',
            'precio_compra' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'precio_venta' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
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
        $producto->unidad_id = $request->unidad_id;
        $producto->precio_compra = $request->precio_compra;
        $producto->precio_venta = $request->precio_venta;

        // return $producto;
        $producto->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('productos.index')->with('message', 'Producto creado correctamente')->with('action', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $unidades = Unidad::all();
        $producto = Producto::findOrFail($id);
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto', 'categorias', 'marcas', 'unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $unidades = Unidad::all();
        $producto = Producto::findOrFail($id);
        return view('productos.update', compact('producto', 'categorias', 'marcas', 'unidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar el formulario
        $request->validate([
            'nombre' => 'required|string|max:255|unique:productos,nombre,' . $id,
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id' => 'required|exists:marcas,id',
            'unidad_id' => 'required|exists:unidads,id',
            'precio_compra' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'precio_venta' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        ], [
            'categoria_id.exists' => 'La categoría seleccionada no es válida.',
            'marca_id.exists' => 'La marca seleccionada no es válida.',
            'unidad_id.exists' => 'La unidad de medida seleccionada no es válida.',
        ]);

        // Modificar el objeto Marca
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id = $request->marca_id;
        $producto->unidad_id = $request->unidad_id;
        $producto->precio_compra = $request->precio_compra;
        $producto->precio_venta = $request->precio_venta;

        $producto->update();
        return redirect()->route('productos.index')->with('message', 'Producto actualizado correctamente')->with('action', 'success');
    }


    public function delete(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.delete', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        try {
            $producto->delete();
        } catch (\Exception $e) {
            return redirect()->route('productos.index')->with('message', 'No se puede eliminar el producto.')->with('action', 'error');
        }
        return redirect()->route('productos.index')->with('message', 'Producto eliminado correctamente')->with('action', 'deleted');
    }
}
