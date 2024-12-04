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
                'nome' => 'João Silva',
                'telefone' => '81 99940-2300',
                'endereco' => 'Rua V.J.A.Da Fonseca ,23',
                'cpf' => '123.456.789-00',
                'email' => 'joao.silva@hotmail.com',
                'cep' => '55745-000',
                'cidade' => 'Orobó',
                'bairro' => 'Centro',
                'uf' => 'PE',
                'forma_de_pagamento' => 'Pix',
                'compra_efetuada' => true,
            ],
            [
                'nome' => 'Raul Silva',
                'telefone' => '81 98150-0000',
                'endereco' => 'Rua Cruzeiro, 54',
                'cpf' => '087.532.709-00',
                'email' => 'raulsilva@gmail.com',
                'cep' => '55730-000',
                'cidade' => 'Bom-Jardim',
                'bairro' => 'Umari',
                'uf' => 'PE',
                'forma_de_pagamento' => 'Boleto',
                'compra_efetuada' => true,
            ],
            [
                'nome' => 'Victor Souza',
                'telefone' => '81 9995-1743',
                'endereco' => 'Rua Cruzeiro, 110',
                'cpf' => '167.093.126-00',
                'email' => 'victorsouza@gmail.com',
                'cep' => '55745-000',
                'cidade' => 'Orobó',
                'bairro' => 'Centro',
                'uf' => 'PE',
                'forma_de_pagamento' => 'Pix',
                'compra_efetuada' => true,
            ],
              
        ]);
    }
}