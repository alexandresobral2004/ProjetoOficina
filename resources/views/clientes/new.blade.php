    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h4>Dados Pessoais</h4>
                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf
                        <div class="live-preview">
                            <div class="row mt-2">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label>{{ __('Nome') }}</label>
                                        <input id="name" type="text" name="name"
                                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Nome') }}" value="{{ old('name', $obj->name ?? '') }}"
                                            required>

                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label>{{ __('E-mail') }}</label>
                                        <input id="email" type="mail" name="email"
                                            class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('seuemail@email.com.br') }}"
                                            value="{{ old('email', $obj->email ?? '') }}" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Check-box para selecionar Pessoa Física ou Jurídica -->
                            <div class="row mt-2">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipo_pessoa" id="pessoa_fisica" value="fisica" checked>
                                        <label class="form-check-label" for="pessoa_fisica">Pessoa Física</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipo_pessoa" id="pessoa_juridica" value="juridica">
                                        <label class="form-check-label" for="pessoa_juridica">Pessoa Jurídica</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-xxl-3 col-md-3">
                                    <div class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                        <label>{{ __('Fone') }}</label>
                                        <input id="fone" type="text" name="fone"
                                            class="form-control{{ $errors->has('fone') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('(00) 00000-0000') }}"
                                            value="{{ old('fone', $obj->fone ?? '') }}" required>

                                    </div>
                                </div>

                                <div class="col-xxl-3 col-md-3">
                                    <div class="form-group{{ $errors->has('foneFixo') ? ' has-danger' : '' }}">
                                        <label>{{ __('Fone Fixo') }}</label>
                                        <input id="foneFixo" type="text" name="foneFixo"
                                            class="form-control{{ $errors->has('foneFixo') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('(00) 0000-0000') }}"
                                            value="{{ old('foneFixo', $obj->foneFixo ?? '') }}">

                                    </div>
                                </div>
                            </div>

                            <!-- Informações de Pessoa Física -->
                            <div id="dados_pessoa_fisica">
                                <div class="row mt-2">
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                            <label class="">{{ __('CPF') }}</label>
                                            <input id="cpf" type="text" name="cpf"
                                                class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('CPF') }}" value="{{ old('cpf', $obj->cpf ?? '') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group{{ $errors->has('dtNasc') ? ' has-danger' : '' }}">
                                            <label>{{ __('Data de Nascimento') }}</label>
                                            <input id="dtNasc" type="date" name="dtNasc"
                                                class="form-control{{ $errors->has('dtNasc') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('Data de Nascimento') }}" value="{{ old('dtNasc', $obj->dtNasc ?? '') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group{{ $errors->has('profissao') ? ' has-danger' : '' }}">
                                            <label>{{ __('Profissão') }}</label>
                                            <input id="profissao" type="text" name="profissao"
                                                class="form-control{{ $errors->has('profissao') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('Profissão') }}" value="{{ old('profissao', $obj->profissao ?? '') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <!-- Informações de Pessoa Jurídica -->
                                <div id="dados_pessoa_juridica" style="display: none;">
                                    <div class="row mt-2">
                                        <div class="col-xxl-6 col-md-6">
                                            <div class="form-group{{ $errors->has('razao_social') ? ' has-danger' : '' }}">
                                                <label>{{ __('Razão Social') }}</label>
                                                <input id="razao_social" type="text" name="razao_social"
                                                    class="form-control{{ $errors->has('razao_social') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Razão Social') }}" value="{{ old('razao_social', $obj->razao_social ?? '') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-md-2">
                                            <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                                                <label>{{ __('CNPJ') }}</label>
                                                <input id="cnpj" type="text" name="cnpj"
                                                    class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('00.000.000/0000-00') }}"
                                                    value="{{ old('cnpj', $obj->cnpj ?? '') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-xxl-2 col-md-2">
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label>{{ __('Senha') }}</label>
                                    <input id="password" type="password" name="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-decoration-none border rounded-2"
                                        placeholder="{{ __('Senha') }}"
                                        value="{{ old('password', $obj->password ?? '') }}" required maxlength="6">

                                </div>
                            </div>
                            <div class="col-xxl-2 col-md-2">
                                <div class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                                    <label>{{ __('Confirme a senha') }}</label>
                                    <input id="confirm_password" type="password" name="confirm_password"
                                        class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }} text-decoration-none border rounded-2"
                                        placeholder="{{ __('Confirme a senha') }}"
                                        value="{{ old('confirm_password', $obj->confirm_password ?? '') }}" required
                                        maxlength="6">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xxl-6 col-md-6">
                                <h3>Endereço</h3>
                            </div>
                        </div>

                        <div>
                            <div class="row mt-2">
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('zip_code') ? ' has-danger' : '' }}">
                                        <label>{{ __('Zip Code') }}</label>
                                        <input id="zip_code" type="text" name="zip_code"
                                            class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Zip Code') }}"
                                            value="{{ old('zip_code', $end->zip_code ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                        <label>{{ __('Endereço') }}</label>
                                        <input id="address" type="text" name="address"
                                            class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Rua e Número') }}"
                                            value="{{ old('address', $end->address ?? '') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                        <label>{{ __('Cidade') }}</label>
                                        <input id="city" type="text" name="city"
                                            class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Cidade') }}"
                                            value="{{ old('city', $end->city ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-xxl-1 col-md-1">
                                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                        <label>{{ __('UF') }}</label>
                                        <input id="state" type="text" name="state"
                                            class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('UF') }}"
                                            value="{{ old('state', $end->state ?? '') }}" required>
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

