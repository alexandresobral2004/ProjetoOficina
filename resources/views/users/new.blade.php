@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Cadastro de Usuário</h4>

                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $obj->id ?? '' }}">
                        <div class="live-preview">

                            <div class="row   mt-2">
                                <div class="col-xx-2 col-md-2">
                                    <div class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }}">
                                        <label>{{ __('Tipo de Usuário') }}</label>
                                        <select name="tipo_user" id="tipo_user" class="form-control">
                                            <option value=" ">Selecione</option>
                                            <option value="fisica">Pessoa Física</option>
                                            <option value="juridica">Pessoa Jurídica</option>
                                        </select>

                                    </div>
                                </div>
                                <div id="campo_dinamico" class="col-xxl-3 col-md-3"></div>

                            </div>
                            <div class="row  mt-2">
                                <div class=" col-xxl-4 col-md-4">
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
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                        <label>{{ __('Fone') }}</label>
                                        <input id="fone" type="text" name="fone"
                                            class="form-control{{ $errors->has('fone') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('(00) 00000-0000)') }}"
                                            value="{{ old('fone', $obj->fone ?? '') }}" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label>{{ __('Senha') }}</label>
                                        <input id="password" type="password" name="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Senha') }}"
                                            value="{{ old('password', $obj->password ?? '') }}" required>

                                    </div>
                                </div>
                                <div class="col-xxl-2 col-md-2">
                                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                                        <label>{{ __('Confirme a senha') }}</label>
                                        <input id="confirm_password" type="password" name="confirm_password"
                                            class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Confirme a senha') }}"
                                            value="{{ old('confirm_password', $obj->confirm_password ?? '') }}" required>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row gy-4 mt-2">
                            <div class="col-xxl-3 col-md-3">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>

                        </div>
                </div>

            </div>
            </form>

        </div>

    </div>
    </div>
    </div>
    <script>
        document.getElementById('tipo_user').addEventListener('change', function() {
            var tipoUsuario = this.value;
            var campoDinamico = document.getElementById('campo_dinamico');

            // Remove os campos dinâmicos existentes
            campoDinamico.innerHTML = '';

            if (tipoUsuario === 'fisica') {
                // Criar e adicionar campo CPF com o modelo desejado
                var divCpf = document.createElement('div');
                divCpf.classList.add('form-group', 'mb-2'); // Adiciona classes do Bootstrap

                var labelCpf = document.createElement('label');
                labelCpf.setAttribute('for', 'cpf');
                labelCpf.innerText = 'CPF'; // Texto do rótulo

                var inputCpf = document.createElement('input');
                inputCpf.setAttribute('type', 'text');
                inputCpf.setAttribute('name', 'cpf');
                inputCpf.setAttribute('id', 'cpf');
                inputCpf.setAttribute('placeholder', 'Digite seu CPF');
                inputCpf.classList.add('form-control'); // Adiciona a classe 'form-control' para o Bootstrap

                divCpf.appendChild(labelCpf);
                divCpf.appendChild(inputCpf);
                campoDinamico.appendChild(divCpf);
                // Aplicar a máscara de CPF
                Inputmask('999.999.999-99').mask(inputCpf);
            } else if (tipoUsuario === 'juridica') {
                // Criar e adicionar campo CNPJ com o modelo desejado
                var divCnpj = document.createElement('div');
                divCnpj.classList.add('form-group', 'mb-2'); // Adiciona classes do Bootstrap

                var labelCnpj = document.createElement('label');
                labelCnpj.setAttribute('for', 'cnpj');
                labelCnpj.innerText = 'CNPJ'; // Texto do rótulo

                var inputCnpj = document.createElement('input');
                inputCnpj.setAttribute('type', 'text');
                inputCnpj.setAttribute('name', 'cnpj');
                inputCnpj.setAttribute('id', 'cnpj');
                inputCnpj.setAttribute('placeholder', 'Digite seu CNPJ');
                inputCnpj.classList.add('form-control'); // Adiciona a classe 'form-control' para o Bootstrap

                divCnpj.appendChild(labelCnpj);
                divCnpj.appendChild(inputCnpj);
                campoDinamico.appendChild(divCnpj);
                // Aplicar a máscara de CNPJ
                Inputmask('99.999.999/9999-99').mask(inputCnpj);
            }
        });

        //Mascara  para FONE, CPF e CNPJ
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


    </div>
@endsection
