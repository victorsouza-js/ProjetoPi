<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        DB::table('produto')->insert([
            [
                'nome' => 'Creatina Dark Lab 300g',
                'preco' => '73.00',
                'qtd_estoque' => '670',
                'preco_promocional' => '60.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Creatina Max 300g',
                'preco' => '83.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '74.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
            
            
        ]);
    }
}