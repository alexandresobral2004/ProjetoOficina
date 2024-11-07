<table class="table table-striped">
    <tr>
        <th>Modelo</th>
        <td>{{ $veiculo->modelo }}</td>
    </tr>
    <tr>
        <th>Marca</th>
        <td>{{ $veiculo->marca }}</td>
    </tr>
    <tr>
        <th>Placa</th>
        <td>{{ $veiculo->placa }}</td>
    </tr>
    <tr>
        <th>Ano de Fabricação</th>
        <td>{{ $veiculo->ano_fabricacao }}</td>
    </tr>
    <tr>
        <th>Chassi</th>
        <td>{{ $veiculo->chassi }}</td>
    </tr>
    <tr>
        <th>Tipo de Veículo</th>
        <td>{{ $veiculo->tipo_veiculo }}</td>
    </tr>
    <tr>
        <th>Cor</th>
        <td>{{ $veiculo->cor }}</td>
    </tr>
    <tr>
        <th>Quilometragem</th>
        <td>{{ $veiculo->quilometragem }}</td>
    </tr>
    <tr>
        <th>Observações</th>
        <td>{{ $veiculo->observacoes ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th>Proprietário</th>
        <td>{{ $veiculo->cliente->name }}</td>
    </tr>
</table>
