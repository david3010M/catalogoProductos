<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Electrónica',
            'Ropa',
            'Hogar',
            'Alimentos',
            'Salud y Belleza',
            'Deportes',
            'Automotriz',
            'Juguetes',
            'Mascotas',
            'Libros',
        ];

        foreach ($categorias as $categoria) {
            Categoria::create([
                'descripcion' => $categoria,
            ]);
        }
    }
}
