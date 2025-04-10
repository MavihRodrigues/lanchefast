<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente 2',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '11999999999',
            'cpf' => '12345678901',
            'email' => 'cliente1@example.com',
            'senha' => bcrypt('123456'),
        ]);

        Cliente::create([
            'nome' => 'Cliente 1',
            'endereco' => 'Rua Exemplo, 124',
            'telefone' => '12999999999',
            'cpf' => '12345678902',
            'email' => 'cliente2@example.com',
            'senha' => bcrypt('1234567'),
        ]);
    }
}
