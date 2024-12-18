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
                'preco' => '57.00',
                'qtd_estoque' => '670',
                'preco_promocional' => '50.00',
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
            [
                'nome' => 'Creatina IntegralMédica 300g',
                'preco' => '71.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '67.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Creatina Probiotica 300g',
                'preco' => '64.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '61.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Creatina Growth 300g',
                'preco' => '72.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '66.85',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Whey Protein Max 900g',
                'preco' => '120.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '99.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Whey Protein IntegralMédica 900g',
                'preco' => '115.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '96.99',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pré Treino Dark Lab Venom 300g',
                'preco' => '99.95',
                'qtd_estoque' => '1004',
                'preco_promocional' => '88.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pré Treino Max s:Frutas Vermelhas 300g',
                'preco' => '95.00',
                'qtd_estoque' => '1004',
                'preco_promocional' => '85.00',
                'peso' => '0.300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
            
            
            
            
        ]);
    }
}