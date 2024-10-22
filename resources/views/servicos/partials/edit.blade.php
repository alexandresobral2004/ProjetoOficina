<form action="{{ route('servicos.update', $servico->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" id="cliente_id" name="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $servico->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="veiculo_id" class="form-label">Veículo</label>
        <select class="form-select" id="veiculo_id" name="veiculo_id" required>
            @foreach($veiculos as $veiculo)
                <option value="{{ $veiculo->id }}" {{ $servico->veiculo_id == $veiculo->id ? 'selected' : '' }}>
                    {{ $veiculo->modelo }} - {{ $veiculo->placa }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="data_inicio" class="form-label">Data de Início</label>
        <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{ $servico->data_inicio }}" required>
    </div>

    <div class="mb-3">
        <label for="data_termino" class="form-label">Data de Término</label>
        <input type="date" class="form-control" id="data_termino" name="data_termino" value="{{ $servico->data_termino }}">
    </div>

    <div class="row">
        <label for="status" class="form-label">Status</label>
        <div class="col-xxl-3 col-md-3 mb-3">
            <select class="form-select" id="status" name="status" required aria-label="Default select example">
                <option value="Pendente" {{ $servico->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Em andamento" {{ $servico->status == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
                <option value="Concluído" {{ $servico->status == 'Concluído' ? 'selected' : '' }}>Concluído</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição do Serviço</label>
        <textarea class="form-control" id="descricao" name="descricao">{{ $servico->descricao }}</textarea>
    </div>

    <div class="mb-3">
        <label for="valor_total" class="form-label">Valor Total (R$)</label>
        <input type="number" step="0.01" class="form-control" id="valor_total" name="valor_total" value="{{ $servico->valor_total }}">
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
