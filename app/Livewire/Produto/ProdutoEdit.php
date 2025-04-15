<?php

namespace App\Http\Livewire\Produto;

use Livewire\Component;
use App\Models\Produto;

class ProdutoEdit extends Component
{
    public $produtoId;
    public $nome;
    public $ingredientes;
    public $valor;

    public function mount($produtoId)
    {
        $produto = Produto::find($produtoId);

        if (!$produto) {
            session()->flash('error', 'Produto não encontrado.');
            return redirect()->route('produtos.index');
        }

        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
