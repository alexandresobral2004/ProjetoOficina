<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-4">Dados do Funcionário</h4>
                <form action="{{ route('funcionarios.store') }}" method="POST">
                    @csrf
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="nome">{{ __('Nome') }}</label>
                                    <input id="nome" type="text" name="nome"
                                           class="form-control @error('nome') is-invalid @enderror"
                                           placeholder="{{ __('Nome') }}"
                                           value="{{ old('nome', $obj->nome ?? '') }}" required>
                                    @error('nome')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="sobrenome">{{ __('Sobrenome') }}</label>
                                    <input id="sobrenome" type="text" name="sobrenome"
                                           class="form-control @error('sobrenome') is-invalid @enderror"
                                           placeholder="{{ __('Sobrenome') }}"
                                           value="{{ old('sobrenome', $obj->sobrenome ?? '') }}" required>
                                    @error('sobrenome')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group{{ $errors->has('data_nascimento') ? ' has-danger' : '' }}">
                                    <label>{{ __('Data de Nascimento') }}</label>
                                    <input id="data_nascimento" type="date" name="data_nascimento"
                                        class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Data de Nascimento') }}"
                                        value="{{ old('data_nascimento', $obj->data_nascimento ?? '') }}" required>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                    <label>{{ __('CPF') }}</label>
                                    <input id="cpf" type="text" name="cpf"
                                        class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('CPF') }}" value="{{ old('cpf', $obj->cpf ?? '') }}"
                                        required>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label>{{ __('E-mail') }}</label>
                                    <input id="email" type="mail" name="email"
                                        class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('seuemail@email.com.br') }}"
                                        value="{{ old('email', $obj->email ?? '') }}" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group{{ $errors->has('telefone') ? ' has-danger' : '' }}">
                                    <label>{{ __('Telefone') }}</label>
                                    <input id="telefone" type="text" name="telefone"
                                        class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('(00) 00000-0000') }}"
                                        value="{{ old('telefone', $obj->telefone ?? '') }}" required>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="cargo">{{ __('Cargo:') }}</label>
                                    <select name="cargo" id="cargo" class="form-control" required>
                                        @foreach ($cargos as $cargo)
                                            <option value="{{ $cargo->value }}" {{ old('cargo', $funcionario->cargo->value ?? '') == $cargo->value ? 'selected' : '' }}>
                                                {{ ucfirst($cargo->value) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="mb-4">Endereço</h5>
                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="endereco[rua]">{{ __('Rua') }}</label>
                                    <input id="endereco[rua]" type="text" name="endereco[rua]"
                                           class="form-control @error('endereco.rua') is-invalid @enderror"
                                           placeholder="{{ __('Rua') }}"
                                           value="{{ old('endereco.rua') }}" required>
                                    @error('endereco.rua')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-2 col-md-2 mb-3">
                                <div class="form-group">
                                    <label for="endereco[numero]">{{ __('Número') }}</label>
                                    <input id="endereco[numero]" type="text" name="endereco[numero]"
                                           class="form-control @error('endereco.numero') is-invalid @enderror"
                                           placeholder="{{ __('Número') }}"
                                           value="{{ old('endereco.numero') }}" required>
                                    @error('endereco.numero')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="endereco[bairro]">{{ __('Bairro') }}</label>
                                    <input id="endereco[bairro]" type="text" name="endereco[bairro]"
                                           class="form-control @error('endereco.bairro') is-invalid @enderror"
                                           placeholder="{{ __('Bairro') }}"
                                           value="{{ old('endereco.bairro') }}" required>
                                    @error('endereco.bairro')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-6 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="endereco[cidade]">{{ __('Cidade') }}</label>
                                    <input id="endereco[cidade]" type="text" name="endereco[cidade]"
                                           class="form-control @error('endereco.cidade') is-invalid @enderror"
                                           placeholder="{{ __('Cidade') }}"
                                           value="{{ old('endereco.cidade') }}" required>
                                    @error('endereco.cidade')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-2 col-md-2 mb-3">
                                <div class="form-group">
                                    <label for="endereco[estado]">{{ __('Estado') }}</label>
                                    <input id="endereco[estado]" type="text" name="endereco[estado]"
                                           class="form-control @error('endereco.estado') is-invalid @enderror"
                                           placeholder="{{ __('UF') }}"
                                           value="{{ old('endereco.estado') }}" maxlength="2" required>
                                    @error('endereco.estado')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="endereco[cep]">{{ __('CEP') }}</label>
                                    <input id="endereco[cep]" type="text" name="endereco[cep]"
                                           class="form-control @error('endereco.cep') is-invalid @enderror"
                                           placeholder="{{ __('CEP') }}"
                                           value="{{ old('endereco.cep') }}" required>
                                    @error('endereco.cep')
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
    //Mascara  para FONE, CPF
    Inputmask({
        mask: '(99) 99999-9999'
    }).mask(document.getElementById('telefone'));

    Inputmask({
        mask: '999.999.999-99'
    }).mask(document.getElementById('cpf'));

    Inputmask({
        mask: '99.999.999/9999-99'
    }).mask(document.getElementById('cnpj'));
</script>
</div>

