<?php

namespace Database\Seeders;

use App\Models\Unidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidades = [
            ['descripcion' => 'Unidad', 'abreviatura' => 'u'],
            ['descripcion' => 'Paquete', 'abreviatura' => 'pkg'],
            ['descripcion' => 'Kilogramo', 'abreviatura' => 'kg'],
            ['descripcion' => 'Gramo', 'abreviatura' => 'g'],
            ['descripcion' => 'Litro', 'abreviatura' => 'L'],
            ['descripcion' => 'Mililitro', 'abreviatura' => 'mL'],
            ['descripcion' => 'Metro', 'abreviatura' => 'm'],
            ['descripcion' => 'Centímetro', 'abreviatura' => 'cm'],
            ['descripcion' => 'Pulgada', 'abreviatura' => 'in'],
            ['descripcion' => 'Docena', 'abreviatura' => 'dz'],
        ];

        foreach ($unidades as $unidad) {
            Unidad::create($unidad);
        }
    }
}
