@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
    <div class="flex justify-center w-full">
        <form class="max-w-screen-md w-full" action="{{ route('productos.store') }}" method="POST">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nombre
                    </label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="MacBook Pro" required />
                </div>
                <div>
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unidad</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($unidades as $unidad)
                            <option value="{{ $unidad->id }}">{{ $unidad->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
        </form>

    </div>
@endsection
