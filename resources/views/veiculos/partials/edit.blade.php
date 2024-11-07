<form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $veiculo->modelo }}" required>
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" value="{{ $veiculo->marca }}" required>
    </div>

    <div class="mb-3">
        <label for="placa" class="form-label">Placa</label>
        <input type="text" class="form-control" id="placa" name="placa" value="{{ $veiculo->placa }}" required>
    </div>

    <div class="mb-3">
        <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
        <input type="number" class="form-control" id="ano_fabricacao" name="ano_fabricacao" value="{{ $veiculo->ano_fabricacao }}" required>
    </div>

    <div class="mb-3">
        <label for="cor" class="form-label">Cor</label>
        <input type="text" class="form-control" id="cor" name="cor" value="{{ $veiculo->cor }}" required>
    </div>

    <div class="mb-3">
        <label for="chassi" class="form-label">Chassi</label>
        <input type="text" class="form-control" id="chassi" name="chassi" value="{{ $veiculo->chassi }}" required>
    </div>

    <div class="mb-3">
        <label for="tipo_veiculo" class="form-label">Tipo de Veículo</label>
        <input type="text" class="form-control" id="tipo_veiculo" name="tipo_veiculo" value="{{ $veiculo->tipo_veiculo }}" required>
    </div>

    <div class="mb-3">
        <label for="quilometragem" class="form-label">Quilometragem</label>
        <input type="number" class="form-control" id="quilometragem" name="quilometragem" value="{{ $veiculo->quilometragem }}" required>
    </div>

    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" id="cliente_id" name="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $veiculo->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
