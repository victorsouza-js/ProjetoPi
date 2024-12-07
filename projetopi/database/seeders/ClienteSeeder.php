<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        DB::table('cliente')->insert([
            [
                'nome' => 'Victor',
                'email' => 'victor@gmail.com',
                'valor_total' => '83.00',
                'produto_comprado' => 'Creatina Max 300g',
                'forma_pagamento' => 'Pix',
            ],
            [
                'nome' => 'Ruan Silva',
                'email' => 'ruansilva@gmail.com',
                'valor_total' => '124.00',
                'produto_comprado' => 'Insany Clow 300g',
                'forma_pagamento' => 'Pix',
            ],
            [
                'nome' => 'Felipe Barbosa',
                'email' => 'felipebarbosa@gmail.com',
                'valor_total' => '83.00',
                'produto_comprado' => 'Creatina Max 300g',
                'forma_pagamento' => 'Boleto',
            ],
              
        ]);
    }
}