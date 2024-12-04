<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        Material::insert([
            ['nama' => 'Impraboard T3', 'kategori' => 'Material', 'harga' => 10000],
            ['nama' => 'Impraboard T5', 'kategori' => 'Material', 'harga' => 15000],
            ['nama' => 'Kardus', 'kategori' => 'Material', 'harga' => 5000],
            ['nama' => 'Frame Injection', 'kategori' => 'Frame', 'harga' => 20000],
            ['nama' => 'Frame Aluminium', 'kategori' => 'Frame', 'harga' => 30000],
        ]);
        $this->call([
            MaterialSeeder::class,
        ]);
    }
}