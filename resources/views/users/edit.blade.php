@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="mb-0 card-title flex-grow-1">Cadastro de Usuário</h4>

            </div><!-- end card header -->
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $obj->id ?? '' }}">

                    <div class="mt-2 row">

                        <div class="col-xx-2 col-md-2">
                            <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                                <label>{{ __('Tipo de Usuário*') }}</label>
                                <select class="form-select" id="role" name="role">
                                    @foreach ($userTypes as $value => $label)
                                    <option value="{{ $value }}" {{ old('role', $obj->role) == $value ? 'selected' : ''
                                        }}>
                                        {{ $label }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-xx-2 col-md-2">
                            <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                <label>{{ __('Status Usuário*') }}</label>
                                <select class="form-select" name="status">
                                    @foreach ($userStatus as $value => $label)
                                    <option value="{{ $value }}" {{ old('status', $obj->status) == $value ? 'selected' :
                                        '' }}>
                                        {{ $label }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>



                    </div>

                    <div class="mt-2 row">
                        <div class=" col-xxl-6 col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Nome') }}</label>
                                <input id="name" type="text" name="name"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Nome') }}" value="{{ old('name', $obj->name ?? '') }}" required>

                            </div>
                        </div>



                        <div class="col-xxl-4 col-md-4">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('E-mail') }}</label>
                                <input id="email" type="text" name="email"
                                    class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('seuemail@email.com.br') }}"
                                    value="{{ old('email', $obj->email ?? '') }}" required>

                            </div>
                        </div>
                    </div>

                    <div class="mt-2 row">

                        <div class="col-xxl-3 col-md-3">
                            <div class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                <label>{{ __('Fone') }}</label>
                                <input id="fone" type="text" name="fone"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('(00) 00000-0000)') }}"
                                    value="{{ old('password', $obj->fone ?? '') }}" required>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label>{{ __('Senha') }}</label>
                                <input id="password" type="password" name="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Senha') }}" value="{{ old('password', $obj->password ?? '') }}"
                                    required>

                            </div>
                        </div>
                        {{-- <div class="col-xxl-3 col-md-3">
                                        <div class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                        <label>{{ __('Confirme a senha') }}</label>
                        <input id="confirm_password" type="text" name="confirm_password"
                            class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Confirme a senha') }}"
                            value="{{ old('confirm_password', $obj->confirm_password ?? '') }}" required>
                    </div>
            </div> --}}
        </div>
        <div class="mt-2 row">
            <div class="col-xxl-3 col-md-3">
                <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                    <label>{{ __('CPF') }}</label>
                    <input id="cpf" type="text" name="cpf"
                        class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('000.000.000-00') }}" value="{{ old('cpf', $obj->cpf ?? '') }}">

                </div>
            </div>

        </div>
    </div>
    <div class="mt-3 row">
        <div class="col-xxl-3 col-md-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </div>


</div>
</form>

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
        mask: '99.999.999/999-99'
    }).mask(document.getElementById('cnpj'));
</script>




@endsection
