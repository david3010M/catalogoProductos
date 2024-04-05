@extends('layouts.plantilla')

@section('title', 'Unidades')

@section('content')
    <div class="flex flex-col gap-6 w-full">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">
                Agregar una Unidad
            </h1>
        </div>
        <div class="relative overflow-x-auto p-5 flex justify-center">

            <div class="flex justify-center w-full max-w-screen-md shadow-md sm:rounded-lg p-3">
                <form class="w-full flex flex-col gap-5" action="{{ route('unidades.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col w-full">

                        {{-- Input de descripción --}}
                        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Descripción
                            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                placeholder="Kilogramo" required />
                        </label>
                        @error('descripcion')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror

                        {{-- Input de Abreviatura --}}
                        <label for="abreviatura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Abreviatura
                            <input type="text" id="abreviatura" name="abreviatura" value="{{ old('abreviatura') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                placeholder="kg" required />
                        </label>
                        @error('abreviatura')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="w-fit text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm  px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Agregar</button>
                    </div>

                </form>

            </div>

            @php
                try {
                    $errorMesssage = $error;
                } catch (\Throwable $th) {
                }
            @endphp

            @if ($errorMesssage)
                <div id="toast"
                    class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow right-5 bottom-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800 transition-transform transform opacity-100 duration-2000 ease-in-out"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                    <div class="ps-4 text-sm font-normal">No se pudo eliminar la unidad</div>
                </div>
            @endif


        </div>
    </div>
@endsection
