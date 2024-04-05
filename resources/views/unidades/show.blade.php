@extends('layouts.plantilla')

@section('title', 'Unidades')

@section('content')
    <div class="flex flex-col gap-6 w-full">
        <div class="flex justify-between">
            <h1 class="flex items-center gap-1 text-2xl font-semibold text-gray-800 dark:text-white">
                <p>Información de la Unidad</p>
                <p class="bg-slate-200 text-slate-600 py-0.5 px-2 rounded-lg">{{ $unidad->descripcion }}</p>
            </h1>
        </div>
        <div class="relative overflow-x-auto p-5 flex justify-center">

            <div class="flex justify-center w-full max-w-screen-md shadow-md sm:rounded-lg p-3">
                <div class="w-full flex flex-col gap-5">
                    <div class="flex flex-col w-full gap-2">
                        <label for="descripcion">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</p>
                            <input disabled readonly type="text" id="descripcion" name="descripcion"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                placeholder="Kilogramo" value="{{ $unidad->descripcion }}" required />
                        </label>
                        <label for="abreviatura">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Abreviatura</p>
                            <input disabled readonly type="text" id="abreviatura" name="abreviatura"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                placeholder="kg" value="{{ $unidad->abreviatura }}" required />
                        </label>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('unidades.index') }}"
                            class="w-fit text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Aceptar</a>
                    </div>

                </div>

            </div>


        </div>
    </div>
@endsection
