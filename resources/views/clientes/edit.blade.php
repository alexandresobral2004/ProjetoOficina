<div class="row">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-2">
            <div class="col-xxl-6 col-md-6">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $cliente->name }}" required>
            </div>
            <div class="col-xxl-6 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>  
            </div>        
        </div>

        <div class="row mt-2">
            <div class="col-xxl-6 col-md-6">
                <label for="fone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="fone" name="fone" value="{{ $cliente->fone }}" required>
            </div>
            <div class="col-xxl-6 col-md-6">
                <label for="foneFixo" class="form-label">Telefone Fixo</label>
                <input type="text" class="form-control" id="foneFixo" name="foneFixo" value="{{ $cliente->foneFixo }}">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xxl-4 col-md-4">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $cliente->cnpj }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="dtNasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dtNasc" name="dtNasc" value="{{ $cliente->dtNasc }}">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xxl-6 col-md-6">
                <label for="profissao" class="form-label">Profissão</label>
                <input type="text" class="form-control" id="profissao" name="profissao" value="{{ $cliente->profissao }}">
            </div>
            <div class="col-xxl-6 col-md-6">
                <label for="razaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" value="{{ $cliente->razaoSocial }}">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xxl-12 col-md-12">
                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                    <label>{{ __('Endereço') }}</label>
                    <input id="address" type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Rua e Número') }}" value="{{ old('address', $endereco->address ?? '') }}" required>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                    <label>{{ __('Cidade') }}</label>
                    <input id="city" type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="{{ __('Cidade') }}" value="{{ old('city', $endereco->city ?? '') }}" required>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                    <label>{{ __('UF') }}</label>
                    <input id="state" type="text" name="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" placeholder="{{ __('UF') }}" value="{{ old('state', $endereco->state ?? '') }}" required>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="form-group{{ $errors->has('zip_code') ? ' has-danger' : '' }}">
                    <label>{{ __('Zip Code') }}</label>
                    <input id="zip_code" type="text" name="zip_code" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" placeholder="{{ __('Zip Code') }}" value="{{ old('zip_code', $endereco->zip_code ?? '') }}" required>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>