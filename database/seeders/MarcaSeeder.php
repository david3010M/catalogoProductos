<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            $marcas = [
                'Apple',
                'HotWeels',
                'H&M',
                'Head & Shoulders',
                'RicoCan',
                'Coquito',
                'Mercedes-Benz',
                'Coca-Cola',
                'Nike',
                'Samsung',
            ];

            foreach ($marcas as $marca) {
                Marca::create([
                    'descripcion' => $marca,
                ]);
            }
        }
    }
}
