<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    public function render()
    {
        return view('livewire.produto.produto-create');
    }

    public function store()
    {
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $this->imagem
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
