<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body">
                <h4 class="gap-2 d-flex ">Dados Pessoais</h4>
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf

                    <div class="p-0 live-preview custom-width">


                        <!-- Check-box para selecionar Pessoa Física ou Jurídica -->

                        <div class="mt-2 row">

                            <div class="col-xxl-5 col-md-5">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label>{{ __('Nome') }}</label>
                                    <input id="name" type="text" name="name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nome') }}" value="{{ old('name', $obj->name ?? '') }}"
                                        required>

                                </div>
                            </div>
                            <div class="col-xxl-5 col-md-5">
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label>{{ __('E-mail') }}</label>
                                    <input id="email" type="mail" name="email"
                                        class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('seuemail@email.com.br') }}"
                                        value="{{ old('email', $obj->email ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <div class="mt-2 row">
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

                            <div class="col-xxl-3 col-md-3">
                                <div class="form-group{{ $errors->has('dtNasc') ? ' has-danger' : '' }}">
                                    <label>{{ __('Data de Nascimento') }}</label>
                                    <input id="dtNasc" type="date" name="dtNasc"
                                        class="form-control{{ $errors->has('dtNasc') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Data de Nascimento') }}"
                                        value="{{ old('dtNasc', $obj->dtNasc ?? '') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Check-box para selecionar Pessoa Física ou Jurídica -->
                        <div class="mt-2 mb-2 row">
                            <div class="col-md-5 d-flex">
                                <div class="form-group{{ $errors->has('tipo_pessoa') ? ' has-danger' : '' }}">
                                    <label>{{ __('Tipo de Cliente:') }}</label>
                                    <select name="tipo_pessoa" class="form-select" id="tipo_pessoa">
                                        <option value="null" selected>Selecione</option>
                                        <option value="fisica">PF - Pessoa Física</option>
                                        <option value="juridica">PJ - Pessoa Jurídica</option>
                                    </select>

                                </div>

                            </div>
                        </div>

                        <!-- Informações de Pessoa Física -->
                        <div id="dados_pessoa_fisica" style="display: none;">

                            <div class="mt-2 row">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                        <label>{{ __('CPF') }}</label>
                                        <input id="cpf" type="text" name="cpf"
                                            class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('CPF') }}" value="{{ old('cpf', $obj->cpf ?? '') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('profissao') ? ' has-danger' : '' }}">
                                        <label>{{ __('Profissão') }}</label>
                                        <input id="profissao" type="text" name="profissao"
                                            class="form-control{{ $errors->has('profissao') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Profissão') }}"
                                            value="{{ old('profissao', $obj->profissao ?? '') }}">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Informações de Pessoa Jurídica -->
                        <div id="dados_pessoa_juridica_new" style="display: none;">
                            <div class="mt-2 row">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('razaoSocial') ? ' has-danger' : '' }}">
                                        <label>{{ __('Razão Social') }}</label>
                                        <input id="razaoSocial_new" type="text" name="razaoSocial"
                                            class="form-control{{ $errors->has('razaoSocial') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Razão Social') }}"
                                            value="{{ old('razaoSocial', $obj->razaoSocial ?? '') }}">

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                                        <label>{{ __('CNPJ') }}</label>
                                        <input
                                            onblur="buscarDadosCNPJ('cnpj_new', ['razaoSocial_new', 'zip_code_new','street_new','number_new', 'neighborhood_new',  'state_new', 'city_new']) "
                                            id="cnpj_new" type="text" name="cnpj"
                                            class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('00.000.000/0000-00') }}"
                                            value="{{ old('cnpj', $obj->cnpj ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Outros campos do formulário -->
                        <!-- 
                        <div class="mt-2 row">
                            <div class="col-xxl-4 col-md-4">
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label>{{ __('Senha') }}</label>
                                    <input id="password" type="password" name="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-decoration-none border rounded-2"
                                        placeholder="{{ __('Senha') }}"
                                        value="{{ old('password', $obj->password ?? '') }}" required maxlength="6">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4">
                                <div class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                                    <label>{{ __('Confirme a senha') }}</label>
                                    <input id="confirm_password" type="password" name="confirm_password"
                                        class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }} text-decoration-none border rounded-2"
                                        placeholder="{{ __('Confirme a senha') }}"
                                        value="{{ old('confirm_password', $obj->confirm_password ?? '') }}" required
                                        maxlength="6">
                                </div>
                            </div>
                        </div> -->

                        <hr class="my-4">

                        <!-- <div class="gap-2 d-flex ">
                            <h3>Endereço</h3>
                        </div>

                        <div>
                            <div class="mt-2 row">
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group{{ $errors->has('zip_code') ? ' has-danger' : '' }}">
                                        <label>{{ __('CEP') }}</label>
                                        <input id="zip_code_new" type="text" name="zip_code" onblur="searchCep('new')"
                                            class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('CEP') }}"
                                            value="{{ old('zip_code', $end->zip_code ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
                                        <label>{{ __('Rua') }}</label>
                                        <input id="street_new" type="text" name="street"
                                            class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Rua') }}"
                                            value="{{ old('street', $end->street ?? '') }}" required>
                                    </div>
                                </div>




                            </div>
                            <div class="mt-2 row">
                                <div class="col-xxl-2 col-md-2">
                                    <div>
                                        <label>{{__('Numero')}}</label>
                                        <input id="number_new" type="number" name="number"
                                            class="form-control{{ $errors->has('number') ? 'is-invalid' : ''}}"
                                            placeholder="{{__('Numero')}}" value="{{old('number', $end->number ?? '')}}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-xxl-5 col-md-5">
                                    <div class="form-group{{ $errors->has('neighborhood') ? ' has-danger' : '' }}">
                                        <label>{{ __('Bairro') }}</label>
                                        <input id="neighborhood_new" type="text" name="neighborhood"
                                            class="form-control{{ $errors->has('neighborhood') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Bairro') }}"
                                            value="{{ old('neighborhood', $end->neighborhood ?? '') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 row">

                                <div class="col-xxl-5 col-md-5">
                                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                        <label>{{ __('Cidade') }}</label>
                                        <input id="city_new" type="text" name="city"
                                            class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Cidade') }}" value="{{ old('city', $end->city ?? '') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                        <label>{{ __('UF') }}</label>
                                        <input id="state_new" type="text" name="state"
                                            class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('UF') }}" value="{{ old('state', $end->state ?? '') }}"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <div class="mt-2 row">
                            <div class="mt-1 mb-0 modal-footer justify-content-between">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <button onclick="clearInputs()" type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


    //Valida Tipo de Pessoa
    const tipoPessoa = document.getElementById('tipo_pessoa');
    tipoPessoa.addEventListener('change', function () {

        console.log(tipoPessoa.value)
        let pessoaFisica = document.getElementById('dados_pessoa_fisica');
        let pessoaJuridica = document.getElementById('dados_pessoa_juridica_new');

        if (tipoPessoa.value == null) {
            pessoaFisica.style.display = "none";
            pessoaJuridica.style.display = "none";
        }

        if (tipoPessoa.value == 'fisica') {
            console.log('fisica')
            pessoaFisica.style.display = "block";
            pessoaJuridica.style.display = "none";
        }
        else {
            console.log('juridica')
            pessoaFisica.style.display = "none";
            pessoaJuridica.style.display = "block";
        }
    })

    //Valida Fone
    // Adiciona o evento de entrada (input) ao campo de telefone
    //Mascara  para FONE, CPF e CNPJ
    Inputmask({
        mask: '(99) 99999-9999'
    }).mask(document.getElementById('foneFixo'));

    Inputmask({
        mask: '(99) 99999-9999'
    }).mask(document.getElementById('fone'));

    Inputmask({
        mask: '999.999.999-99'
    }).mask(document.getElementById('cpf'));

    Inputmask({
        mask: '99.999.999/999-99'
    }).mask(document.getElementById('cnpj'));

</script>
<script type="text/javascript" src="{{ asset('assets/js/cep.js') }}"></script>
