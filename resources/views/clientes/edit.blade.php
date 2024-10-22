@props(['cliente', 'endereco'])
<div class="row gap-2">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-flex align-content-center justify-content-center m-0 p-0">
            <h5>Dados Pessoais</h5>
        </div>
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
            <div class="col-xxl-4 col-md-4">
                <label for="fone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="fone" name="fone" value="{{ $cliente->fone }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="foneFixo" class="form-label">Telefone Fixo</label>
                <input type="text" class="form-control" id="foneFixo" name="foneFixo" value="{{ $cliente->foneFixo }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="dtNasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dtNasc" name="dtNasc" value="{{ $cliente->dtNasc }}">
            </div>
        </div>

        <!-- Check-box para selecionar Pessoa Física ou Jurídica -->

        <div class="row mt-2 ">
            <div class="col-md-12 d-flex justify-content-center align-content-center gap-2">
                <label class="form-check-label">
                    <input type="radio" name="tipo_pessoa" value="fisica" id="pessoaFisica" checked> Pessoa Física
                </label>
                <label class="form-check-label ml-2">
                    <input type="radio" name="tipo_pessoa" value="juridica" id="pessoaJuridica"> Pessoa Jurídica
                </label>
            </div>
        </div>

        <!-- Dados Pessoa Física -->
        <div id="dados_pessoa_fisica">
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="profissao" class="form-label">Profissão</label>
                    <input type="text" class="form-control" id="profissao" name="profissao"
                        value="{{ $cliente->profissao }}">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}">
                </div>
            </div>
        </div>

        <!-- Dados Pessoa Jurídica -->
        <div id="dados_pessoa_juridica" style="display: none;">
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="razaoSocial" class="form-label">Razão Social</label>
                    <input type="text" class="form-control" id="razaoSocial" name="razaoSocial"
                        value="{{ $cliente->razaoSocial }}">
                </div>
                <div class="col-md-6">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $cliente->cnpj }}">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="d-flex align-content-center justify-content-center m-0 p-0">
            <h5>Endereço</h5>
        </div>
        <div class="row mt-2">
            <div class="col-xxl-12 col-md-12">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="{{ old('address', $cliente->endereco->address ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="city" name="city"
                    value="{{ old('city', $cliente->endereco->city ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="state" class="form-label">UF</label>
                <input type="text" class="form-control" id="state" name="state"
                    value="{{ old('state', $cliente->endereco->state ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="zip_code" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code"
                    value="{{ old('zip_code', $cliente->endereco->zip_code ?? '') }}" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<script>
    document.getElementById('pessoaFisica').addEventListener('change', function() {
        document.getElementById('dados_pessoa_fisica').style.display = 'block';
        document.getElementById('dados_pessoa_juridica').style.display = 'none';
    });

    document.getElementById('pessoaJuridica').addEventListener('change', function() {
        document.getElementById('dados_pessoa_fisica').style.display = 'none';
        document.getElementById('dados_pessoa_juridica').style.display = 'block';
    });
</script>
