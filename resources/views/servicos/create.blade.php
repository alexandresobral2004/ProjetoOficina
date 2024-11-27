<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-4">Dados do Serviço</h4>
                <form action="{{ route('servicos.store') }}" method="POST">
                    @csrf
                    <div class="live-preview">
                        <!-- Linha 1: Cliente e Veículo -->
                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="cliente_id">{{ __('Cliente') }}</label>
                                    <select name="cliente_id" id="cliente_id" class="form-control" required>
                                        <option value="" selected >Selecione o Cliente</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">
                                                {{ $cliente->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('cliente_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="veiculo_id">{{ __('Veículo') }}</label>
                                    <select id="veiculo" name="veiculo_id" class="form-control" required>
                                        <option value="">Selecione o Veículo</option> <!-- Placeholder para o JavaScript preencher -->
                                    </select>
                                    @error('veiculo_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <!-- Linha 2: Data de Início, Data de Término e Status -->
                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="data_inicio">{{ __('Data de Início') }}</label>
                                    <input id="data_inicio" type="date" name="data_inicio"
                                           class="form-control @error('data_inicio') is-invalid @enderror"
                                           value="{{ old('data_inicio') }}" required>
                                    @error('data_inicio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="data_termino">{{ __('Data de Término (opcional)') }}</label>
                                    <input id="data_termino" type="date" name="data_termino"
                                           class="form-control @error('data_termino') is-invalid @enderror"
                                           value="{{ old('data_termino') }}">
                                    @error('data_termino')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="status">{{ __('Status') }}</label>
                                    <select id="status_id" name="status"  class="form-control" required>
                                        <option value="">Selecione o status</option> <!-- Placeholder para o JavaScript preencher -->
                                        <option value="Pendente" {{ old('status') == 'Pendente' ? 'selected' : '' }}>
                                            Pendente
                                        </option>
                                        <option value="Em andamento" {{ old('status') == 'Em andamento' ? 'selected' : '' }}>
                                            Em andamento
                                        </option>
                                        <option value="Concluído" {{ old('status') == 'Concluído' ? 'selected' : '' }}>
                                            Concluído
                                        </option>
                                    </select>
                                    @error('veiculo_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Linha 3: Valor Total e Descrição -->
                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="valor_total">{{ __('Valor Total (R$)') }}</label>
                                    <input id="valor_total" type="number" step="0.01" name="valor_total"
                                           class="form-control @error('valor_total') is-invalid @enderror"
                                           placeholder="{{ __('Ex: 150.00') }}"
                                           value="{{ old('valor_total') }}">
                                    @error('valor_total')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-8 col-md-8 mb-3">
                                <div class="form-group">
                                    <label for="descricao">{{ __('Descrição') }}</label>
                                    <textarea id="descricao" name="descricao"
                                              class="form-control @error('descricao') is-invalid @enderror"
                                              placeholder="{{ __('Descrição do serviço') }}"
                                              rows="3">{{ old('descricao') }}</textarea>
                                    @error('descricao')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Salvar -->
                        <div class="row">
                            <div class="col-xxl-3 col-md-3 mt-4">
                                <button type="submit" class="btn btn-primary w-100">Salvar Serviço</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clienteDropdown = document.getElementById('cliente_id');
        const veiculoDropdown = document.getElementById('veiculo');

        clienteDropdown.addEventListener('change', function () {
            const clienteId = clienteDropdown.value;

            // Limpa o dropdown de veículos
            veiculoDropdown.innerHTML = '<option value="">Selecione o Veículo</option>';

            // Realiza a requisição AJAX
            if (clienteId) {
                fetch(`/clientes/veiculos/${clienteId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(veiculo => {
                            const option = document.createElement('option');
                            option.value = veiculo.id;
                            option.textContent = veiculo.modelo;
                            veiculoDropdown.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Erro ao buscar veículos:', error));
            }
        });
    });
</script>
