@extends('layouts.plantilla')

@section('title', 'Categorías')

@section('content')
    <div class="flex flex-col gap-6 w-full">
        <div class="flex justify-between">
            <h1 class="flex items-center gap-1 text-2xl font-semibold text-gray-800 dark:text-white">
                <p>Eliminar la Categoría</p>
                <p class="bg-slate-200 text-slate-600 py-0.5 px-2 rounded-lg">{{ $categoria->descripcion }}</p>
            </h1>
        </div>
        <div class="relative overflow-x-auto p-5 flex justify-center">

            <div class="flex justify-center w-full max-w-screen-md shadow-md sm:rounded-lg p-3">
                <form class="w-full flex flex-col gap-5" action="{{ route('categorias.destroy', $categoria->id) }}"
                    method="POST">
                    @csrf
                    <div class="relative bg-white rounded-lg dark:bg-gray-700">
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                            <div class="p-4 md:p-5 text-center">
                                {{-- Icono --}}
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                {{-- Mensaje --}}
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Está seguro de
                                    eliminar el elemento?</h3>

                                {{-- Botones --}}
                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Eliminar
                                </button>
                                <a href="{{ route('categorias.index') }}"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-slate-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                    Cancelar</a>
                            </div>
                        </form>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
