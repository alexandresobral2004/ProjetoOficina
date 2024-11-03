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
                <input type="text" class="form-control" id="name_edit" name="name" value="{{ $cliente->name }}" required>
            </div>
            <div class="col-xxl-6 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_edit" name="email" value="{{ $cliente->email }}" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xxl-4 col-md-4">
                <label for="fone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="fone_edit" name="fone" value="{{ $cliente->fone }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="foneFixo" class="form-label">Telefone Fixo</label>
                <input type="text" class="form-control" id="foneFixo_edit" name="foneFixo" value="{{ $cliente->foneFixo }}">
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="dtNasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dtNasc_edit" name="dtNasc" value="{{ $cliente->dtNasc }}">
            </div>
        </div>

        
    
        <!-- Check-box para selecionar Pessoa Física ou Jurídica-->
        <div class="row mt-2">
            <div class="col-md-12 d-flex justify-content-center align-content-center gap-2">
                <label class="form-check-label">
                    <input  id="pessoaFisica_edit" name="tipo_pessoa_new_edit" onclick="ShowORHide('dados_pessoa_fisica_edit','dados_pessoa_juridica_edit', 'tipo_pessoa_new_edit')" type="radio" name="tipo_pessoa" value="fisica" checked>
                    Pessoa Física
                </label>
                <label class="form-check-label ml-2">
                    <input  id="pessoaJuridica_edit" name="tipo_pessoa_new_edit" onclick="ShowORHide('dados_pessoa_fisica_edit','dados_pessoa_juridica_edit', 'tipo_pessoa_new_edit')" type="radio" name="tipo_pessoa" value="juridica"> Pessoa
                    Jurídica
                </label>
            </div> 
        </div>

        <!-- Dados Pessoa Física -->
        <div id="dados_pessoa_fisica_edit">
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="profissao" class="form-label">Profissão</label>
                    <input type="text" class="form-control" id="profissao_edit" name="profissao"
                        value="{{ $cliente->profissao }}">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf_edit" name="cpf" value="{{ $cliente->cpf }}">
                </div>
            </div>
        </div>

        <!-- Dados Pessoa Jurídica -->
        <div id="dados_pessoa_juridica_edit" class="d-none">
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="razaoSocial_edit" class="form-label">Razão Social</label>
                    <input type="text" class="form-control" id="razaoSocial_edit" name="razaoSocial"
                        value="{{ $cliente->razaoSocial }}">
                </div>
                <div class="col-md-6">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input id="cnpj_edit" onblur="buscarDadosCNPJ('cnpj_edit', ['razaoSocial_edit','zip_code_edit'])" type="text" class="form-control" name="cnpj" value="{{ $cliente->cnpj }}">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="d-flex align-content-center justify-content-center m-0 p-0">
            <h5>Endereço</h5>
        </div>
        <div class="row mt-2">
            <div class="col-xxl-4 col-md-4">
                <label for="zip_code" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zip_code_edit" name="zip_code"
                    value="{{ old('zip_code', $cliente->endereco->zip_code ?? '') }}" required>
            </div>
            <div class="col-xxl-6 col-md-6">
                <label for="street" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="street_edit" name="street"
                    value="{{ old('street', $cliente->endereco->street ?? '') }}" required>
            </div>

            <div class="col-xxl-2 col-md-2">
                <label for="number" class="form-label">Numero</label>
                <input type="text" class="form-control" id="number_edit" name="number"
                    value="{{ old('number', $cliente->endereco->number ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="neighborhood">Bairro</label>
                <input type="text" class="form-control" id="neighborhood_edit" name="neighborhood"
                    value="{{ old('neighborhood', $cliente->endereco->neighborhood ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="city_edit" name="city"
                    value="{{ old('city', $cliente->endereco->city ?? '') }}" required>
            </div>
            <div class="col-xxl-4 col-md-4">
                <label for="state" class="form-label">UF</label>
                <input type="text" class="form-control" id="state_edit" name="state"
                    value="{{ old('state', $cliente->endereco->state ?? '') }}" required>
            </div>
        </div>

        <div class="row mt-2">
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="{{ asset('assets/js/cep.js') }}"></script>
