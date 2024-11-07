<table class="table table-striped">
    <tr>
        <th>Cliente</th>
        <td>{{ $servico->cliente->name }}</td>
    </tr>
    <tr>
        <th>Veículo</th>
        <td>{{ $servico->veiculo->modelo }}</td>
    </tr>
    <tr>
        <th>Data de Início</th>
        <td>{{ $servico->data_inicio }}</td>
    </tr>
    <tr>
        <th>Data de Término</th>
        <td>{{ $servico->data_termino ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $servico->status }}</td>
    </tr>
    <tr>
        <th>Descrição</th>
        <td>{{ $servico->descricao ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th>Valor Total (R$)</th>
        <td>{{ $servico->valor_total ?? 'Não definido' }}</td>
    </tr>
</table>
