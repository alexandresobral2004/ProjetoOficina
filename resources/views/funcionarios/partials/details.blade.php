<div class="modal-body">
    <h5 class="text-start mb-4">Detalhes do Funcionário</h5>
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <td>{{ $funcionario->nome }} {{ $funcionario->sobrenome }}</td>
        </tr>
        <tr>
            <th>CPF</th>
            <td>{{ $funcionario->cpf }}</td>
        </tr>
        <tr>
            <th>Data de Nascimento</th>
            <td>{{ old('data_nascimento', \Carbon\Carbon::parse($funcionario->data_nascimento)->format('d/m/Y')) }}</td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td>{{ $funcionario->telefone }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $funcionario->email }}</td>
        </tr>
        <tr>
            <th>Cargo</th>
            <td>{{ $funcionario->cargo }}</td>
        </tr>
    </table>

    <h5 class="text-start mt-4 mb-4">Endereço</h5>
    <table class="table table-striped">
        @if($funcionario->endereco)
            <tr>
                <th>Rua</th>
                <td>{{ $funcionario->endereco->rua }}</td>
            </tr>
            <tr>
                <th>Número</th>
                <td>{{ $funcionario->endereco->numero }}</td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td>{{ $funcionario->endereco->bairro }}</td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td>{{ $funcionario->endereco->cidade }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $funcionario->endereco->estado }}</td>
            </tr>
            <tr>
                <th>CEP</th>
                <td>{{ $funcionario->endereco->cep }}</td>
            </tr>
            <tr>
                <th>Complemento</th>
                <td>{{ $funcionario->endereco->complemento ?? 'N/A' }}</td>
            </tr>
        @else
            <tr>
                <td colspan="2" class="text-center text-muted">Endereço não disponível</td>
            </tr>
        @endif
    </table>
</div>
