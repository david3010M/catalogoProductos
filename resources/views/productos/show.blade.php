@extends('layouts.plantilla')

@section('title', 'Producto ' . $producto->nombre)

@section('content')
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $producto->nombre }}
            </h5>

        </div>
    </div>

@endsection
