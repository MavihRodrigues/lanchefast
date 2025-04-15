<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Cadastrar Produto</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Voltar para a lista de produtos
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        placeholder="Hambúrguer" name="nome" wire:model="nome" required>
                    @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ingredientes" class="form-label">Ingredientes</label>
                    <textarea class="form-control @error('ingredientes') is-invalid @enderror" id="ingredientes"
                        placeholder="Pão, hambúrguer..." name="ingredientes" wire:model="ingredientes" rows="3" required>{{ old('ingredientes') }}</textarea>
                    @error('ingredientes')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control @error('valor') is-invalid @enderror" id="valor"
                        placeholder="12.50" name="valor" wire:model="valor" required>
                    @error('valor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Salvar Produto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
