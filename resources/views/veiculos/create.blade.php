<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-4">Dados do Veículo</h4>
                <form action="{{ route('veiculos.store') }}" method="POST">
                    @csrf
                    <div class="live-preview">
                        <!-- Linha 1: Modelo e Marca -->
                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="modelo">{{ __('Modelo') }}</label>
                                    <input id="modelo" type="text" name="modelo"
                                           class="form-control @error('modelo') is-invalid @enderror"
                                           placeholder="{{ __('Modelo do veículo') }}"
                                           value="{{ old('modelo', $obj->modelo ?? '') }}" required>
                                    @error('modelo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="marca">{{ __('Marca') }}</label>
                                    <input id="marca" type="text" name="marca"
                                           class="form-control @error('marca') is-invalid @enderror"
                                           placeholder="{{ __('Marca do veículo') }}"
                                           value="{{ old('marca', $obj->marca ?? '') }}" required>
                                    @error('marca')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Linha 2: Placa, Ano de Fabricação e Chassi -->
                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="placa">{{ __('Placa') }}</label>
                                    <input id="placa" type="text" name="placa"
                                           class="form-control @error('placa') is-invalid @enderror"
                                           placeholder="{{ __('Placa do veículo') }}"
                                           value="{{ old('placa', $obj->placa ?? '') }}" required>
                                    @error('placa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="ano_fabricacao">{{ __('Ano de fabricação') }}</label>
                                    <input id="ano_fabricacao" type="text" name="ano_fabricacao"
                                           class="form-control @error('ano_fabricacao') is-invalid @enderror"
                                           placeholder="{{ __('Ex: 2020') }}"
                                           value="{{ old('ano_fabricacao', $obj->ano_fabricacao ?? '') }}" required>
                                    @error('ano_fabricacao')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="chassi">{{ __('Chassi') }}</label>
                                    <input id="chassi" type="text" name="chassi"
                                           class="form-control @error('chassi') is-invalid @enderror"
                                           placeholder="{{ __('Chassi do veículo') }}"
                                           value="{{ old('chassi', $obj->chassi ?? '') }}" required>
                                    @error('chassi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Linha 3: Quilometragem, Cor e Tipo de Veículo -->
                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="quilometragem">{{ __('Quilometragem') }}</label>
                                    <input id="quilometragem" type="text" name="quilometragem"
                                           class="form-control @error('quilometragem') is-invalid @enderror"
                                           placeholder="{{ __('Quilometragem atual') }}"
                                           value="{{ old('quilometragem', $obj->quilometragem ?? '') }}" required>
                                    @error('quilometragem')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="cor">{{ __('Cor') }}</label>
                                    <input id="cor" type="text" name="cor"
                                           class="form-control @error('cor') is-invalid @enderror"
                                           placeholder="{{ __('Cor do veículo') }}"
                                           value="{{ old('cor', $obj->cor ?? '') }}" required>
                                    @error('cor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="tipo_veiculo">{{ __('Tipo de Veículo') }}</label>
                                    <input id="tipo_veiculo" type="text" name="tipo_veiculo"
                                           class="form-control @error('tipo_veiculo') is-invalid @enderror"
                                           placeholder="{{ __('Ex: SUV, caminhonete, caminhão') }}"
                                           value="{{ old('tipo_veiculo', $obj->tipo_veiculo ?? '') }}" required>
                                    @error('tipo_veiculo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Linha 4: Cliente Proprietário e Observações -->
                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="cliente_id">{{ __('Cliente proprietário') }}</label>
                                    <select name="cliente_id" id="cliente_id" class="form-control" required>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}"
                                                    {{ old('cliente_id', $obj->cliente_id ?? '') == $cliente->id ? 'selected' : '' }}>
                                                {{ $cliente->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="observacoes">{{ __('Observações') }}</label>
                                    <textarea id="observacoes" name="observacoes"
                                              class="form-control @error('observacoes') is-invalid @enderror"
                                              placeholder="{{ __('Observações adicionais sobre o veículo') }}"
                                              rows="3">{{ old('observacoes', $obj->observacoes ?? '') }}</textarea>
                                    @error('observacoes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Salvar -->
                        <div class="row">
                            <div class="col-xxl-3 col-md-3 mt-4">
                                <button type="submit" class="btn btn-primary w-100">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    //Mascara  para FONE, CPF e CNPJ
    Inputmask({
        mask: '(99) 99999-9999'
    }).mask(document.getElementById('fone'));

    Inputmask({
        mask: '999.999.999-99'
    }).mask(document.getElementById('cpf'));

    Inputmask({
        mask: '(99) 9999-9999'
    }).mask(document.getElementById('foneFixo'));


    Inputmask({
        mask: '99.999.999/9999-99'
    }).mask(document.getElementById('cnpj'));
</script>
</div>

