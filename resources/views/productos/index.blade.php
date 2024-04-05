@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
    <div class="flex flex-col gap-6 w-full">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Productos</h1>
            <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-slate-700 rounded-lg hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800"
                href="{{ route('productos.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="sm:w-6 sm:h-6 w-5 h-5 mr-2">
                    <path fill-rule="evenodd"
                        d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                        clip-rule="evenodd" />
                </svg>
                Agregar Producto
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-slate-800 uppercase bg-slate-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        @php
                            $titulos = ['Nombre', 'Categoría', 'Marca', 'Unidad', 'P. Compra', 'P. Venta', 'Acciones'];
                        @endphp
                        @foreach ($titulos as $titulo)
                            <th scope="col" class="px-6 py-3 text-center text-nowrap">
                                {{ $titulo }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 text-nowrap font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $producto->nombre }}
                            </th>
                            <td class="px-6 py-4 text-center text-nowrap">
                                {{ $producto->categoria->descripcion }}
                            </td>
                            <td class="px-6 py-4 text-center text-nowrap">
                                {{ $producto->marca->descripcion }}
                            </td>
                            <td class="px-6 py-4 text-center text-nowrap">
                                {{ $producto->unidad->descripcion }}
                            </td>
                            <td class="px-6 py-4 text-right text-nowrap">
                                {{ $producto->precio_compra }}
                            </td>
                            <td class="px-6 py-4 text-right text-nowrap">
                                {{ $producto->precio_venta }}
                            </td>
                            <td class="px-6 py-4 text-right text-nowrap flex justify-around">
                                <a href="{{ route('productos.show', $producto->id) }}"
                                    class="font-medium text-gray-400 dark:text-gray-400 hover:text-blue-600 hover:underline">Ver</a>
                                <a href="#"
                                    class="font-medium text-zinc-400 dark:text-zinc-400 hover:text-amber-600 hover:underline">Editar</a>
                                <a href="#"
                                    class="font-medium text-slate-400 dark:text-slate-400 hover:text-red-600 hover:underline">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $productos->links() }}
    </div>




@endsection
