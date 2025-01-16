@props(['cliente'])
<div class="row">
    <div class="d-flex justify-content-center align-items-center">
        <h5>Dados Pessoais</h5>
    </div>
    <div class="row mt-3">
        <div class="col-xxl-4 col-md-5">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $cliente->name }}" readonly>
        </div>
        <div class="col-xxl-4 col-md-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $cliente->email }}" readonly>
        </div>
        <div class="col-xxl-4 col-md-2">
            <label for="dtNasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dtNasc" value="{{ $cliente->dtNasc }}" readonly>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xxl-4 col-md-4">
            <label for="fone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="fone" value="{{ $cliente->fone }}" readonly>
        </div>
        <div class="col-xxl-4 col-md-4">
            <label for="foneFixo" class="form-label">Telefone Fixo</label>
            <input type="text" class="form-control" name="foneFixo" value="{{ $cliente->foneFixo }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="profissao" class="form-label">Profissão</label>
            <input type="text" class="form-control" name="profissao" value="{{ $cliente->profissao }}" readonly>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control"" name=" cpf" value="{{ $cliente->cpf }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="razaoSocial" class="form-label">Razão Social</label>
            <input type="text" class="form-control" name="razaoSocial" value="{{ $cliente->razaoSocial }}" readonly>
        </div>
        <div class="col-md-4">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" value="{{ $cliente->cnpj }}" readonly>
        </div>
    </div>

    <div class="row mt-2">

    </div>

    <hr class="my-4">

    <div class="d-flex align-content-center justify-content-center m-0 p-0">
        <h5>Endereço</h5>
    </div>
    <div class="row mt-3">
        <div class="col-xxl-4 col-md-4">
            <label for="zip_code" class="form-label">CEP</label>
            <input type="text" class="form-control" name="zip_code"
                value="{{ old('zip_code', $cliente->endereco->zip_code ?? '') }}" readonly>
        </div>
        <div class="col-xxl-6 col-md-6">
            <label for="street" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="street"
                value="{{ old('street', $cliente->endereco->street ?? '') }}" readonly>
        </div>
        <div class="col-xxl-2 col-md-2">
            <label for="number" class="form-label">Número</label>
            <input type="number" class="form-control" name="number"
                value="{{ old('number', $cliente->endereco->number ?? '') }}">
        </div>
        <div class="col-xxl-4 col-md-4">
            <label for="neighborhood" class="form-label">Bairro</label>
            <input type="text" class="form-control" name="city"
                value="{{ old('city', $cliente->endereco->city ?? '') }}" readonly>
        </div>
        <div class="col-xxl-4 col-md-4">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city"
                value="{{ old('city', $cliente->endereco->city ?? '') }}" readonly>
        </div>
        <div class="col-xxl-4 col-md-4">
            <label for="state" class="form-label">UF</label>
            <input type="text" class="form-control" id="state" name="state"
                value="{{ old('state', $cliente->endereco->state ?? '') }}" readonly>
        </div>
    </div>

</div>