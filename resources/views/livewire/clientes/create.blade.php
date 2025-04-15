<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Cadastrar Cliente</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Voltar para a lista de clientes
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        name="nome" placeholder="Lucas de Jesus" wire:model="nome" required>
                    @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <textarea class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco"
                        placeholder="Rua Paineiras, 27-89" wire:model="endereco" rows="3" required>{{ old('endereco') }}</textarea>
                    @error('endereco')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">telefone</label>
                    <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone"
                        name="telefone" placeholder="12345678901" wire:model="telefone" required>
                    @error('telefone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf"
                        name="cpf" wire:model="cpf" required>
                    @error('cpf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="temail" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="dejesus@lucas.com" wire:model="email" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control @error('senha') is-invalid @enderror" id="senha"
                        name="senha" wire:model="senha" required>
                    @error('senha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Salvar Cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
