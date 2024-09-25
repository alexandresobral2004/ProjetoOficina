@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Cadastro de Clientes</h4>

                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="live-preview">
                            <div class="row mt-2">
                                <div class=" col-xxl-6 col-md-6">
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


                            <div class="row mt-2">

                                <div class="col-xxl-3 col-md-3">
                                    <div class="form-group{{ $errors->has('profissao') ? ' has-danger' : '' }}">
                                        <label>{{ __('Profissão') }}</label>
                                        <input id="profissao" type="text" name="profissao"
                                            class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Profissao') }}"
                                            value="{{ old('profissao', $obj->profissao ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('dtNasc') ? ' has-danger' : '' }}">
                                        <label>{{ __('Data de Nascimento') }}</label>
                                        <input id="dtNasc" type="date" name="dtNasc"
                                            class="form-control{{ $errors->has('dtNasc') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Data de Nascimento') }}"
                                            value="{{ old('dtNasc', $obj->dtNasc ?? '') }}">
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

                            <div class="row mt-2">
                                <div class="col-xxl-3 col-md-3">
                                    <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                        <label>{{ __('CPF') }}</label>
                                        <input id="cpf" type="text" name="cpf"
                                            class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('000.000.000-00') }}"
                                            value="{{ old('cpf', $obj->cpf ?? '') }}">

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-3">
                                    <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                                        <label>{{ __('CNPJ') }}</label>
                                        <input id="cnpj" type="text" name="cnpj"
                                            class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('00.000.000/0000-00') }}"
                                            value="{{ old('cnpj', $obj->cnpj ?? '') }}">

                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group{{ $errors->has('razaosocial') ? ' has-danger' : '' }}">
                                        <label>{{ __('Razão Social(Empresa)') }}</label>
                                        <input id="razaosocial" type="text" name="razaosocial"
                                            class="form-control{{ $errors->has('razaosocial') ? ' is-invalid' : '' }} text-decoration-none border rounded-2"
                                            placeholder="{{ __('Empresa Teste Ltda') }}"
                                            value="{{ old('razaosocial', $obj->razaosocial ?? '') }}">

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
                        <div class="row mt-2">
                            <div class="col-xxl-3 col-md-3 mt-2">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>

                        </div>
                </div>

            </div>
            </form>

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
@endsection
