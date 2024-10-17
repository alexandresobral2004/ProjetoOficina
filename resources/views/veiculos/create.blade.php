<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h4>Dados do Veículo</h4>
                <form action="{{ route('veiculos.store') }}" method="POST">
                    @csrf
                    <div class="live-preview">
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-md-6">
                                <div class="form-group{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                                    <label>{{ __('Modelo') }}</label>
                                    <input id="modelo" type="text" name="modelo"
                                        class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Modelo') }}" value="{{ old('modelo', $obj->modelo ?? '') }}"
                                        required>

                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4">
                                <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                                    <label>{{ __('Marca') }}</label>
                                    <input id="marca" type="text" name="marca"
                                        class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Marca') }}" value="{{ old('marca', $obj->marca ?? '') }}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-md-6">
                                <div class="form-group{{ $errors->has('placa') ? ' has-danger' : '' }}">
                                    <label>{{ __('Placa') }}</label>
                                    <input id="placa" type="text" name="placa"
                                        class="form-control{{ $errors->has('placa') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Placa') }}" value="{{ old('placa', $obj->placa ?? '') }}"
                                        required>

                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4">
                                <div class="form-group{{ $errors->has('ano') ? ' has-danger' : '' }}">
                                    <label>{{ __('Ano') }}</label>
                                    <input id="ano" type="text" name="ano"
                                        class="form-control{{ $errors->has('ano') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Ano') }}" value="{{ old('ano', $obj->ano ?? '') }}"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-xxl-6 col-md-6">
                                <div class="form-group">
                                    <label for="cliente_id">Cliente</label>
                                    <select name="cliente_id" id="cliente_id" class="form-control" required>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                                {{ $cliente->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-xxl-3 col-md-3 mt-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
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

