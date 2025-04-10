<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente 1',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '12121212121', //11
            'cpf' => '87878787878', //11
            'email' => 'cliente1@example.com',
            'senha' => bcrypt('senha123'),
        ]);

        Cliente::create([
            'nome' => 'Cliente 22',
            'endereco' => 'Rua Exemplo2, 123',
            'telefone' => '45454545454',
            'cpf' => '34343434343',
            'email' => 'cliente22@example.com',
            'senha' => bcrypt('senha123'),
        ]);

        Cliente::create([
            'nome' => 'Cliente Exemplo3',
            'endereco' => 'Rua Exemplo3, 123',
            'telefone' => '90909090909',
            'cpf' => '15151515151',
            'email' => 'cliente33@example.com',
            'senha' => bcrypt('senha123'),
        ]);

        //Cliente::factory()->count(10)->create();
    }
}