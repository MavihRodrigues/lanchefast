<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome' => 'Hambúrguer Clássico',
            'ingredientes' => 'Pão, hambúrguer, queijo, alfate, tomate',
            'valor' => 15.90,
        ]);

        Produto::create([
            'nome' => 'Batata Frita',
            'ingredientes' => 'Batata, sal',
            'valor' => 8.50,
        ]);

        //Produto::factory()->count(15)->create();
    }
}