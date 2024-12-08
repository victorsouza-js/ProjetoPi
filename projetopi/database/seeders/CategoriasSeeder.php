<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nome' => 'Creatinas',
            ],
            [
                'nome' => 'Proteinas',
            ],
            [
                'nome' => 'Aminoácidos',
            ],
            [
                'nome' => 'Vitamina C',
            ],
            [
                'nome' => 'Vitamina D',
            ],
            [
                'nome' => 'Vitamina E',
            ],
            [
                'nome' => 'Vitamina K',
            ],
            [
                'nome' => 'Vitamina B12',
            ],
            ]);
    }
}
