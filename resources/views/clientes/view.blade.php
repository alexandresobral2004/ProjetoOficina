@props(['cliente', 'endereco'])
    <div>
        <h3>Dados Pessoais</h4>
        <strong>Nome:</strong> {{ $cliente->name }}<br>
        <strong>Email:</strong> {{ $cliente->email }}<br>
        <strong>Telefone:</strong> {{ $cliente->fone }}<br>
        <strong>Telefone Fixo:</strong> {{ $cliente->foneFixo }}<br>
        <strong>CPF:</strong> {{ $cliente->cpf }}<br>
        <strong>CNPJ:</strong> {{ $cliente->cnpj }}<br>
        <strong>Data de Nascimento:</strong> {{ $cliente->dtNasc }}<br>
        <strong>Profissão:</strong> {{ $cliente->profissao }}<br>
        <strong>Razão Social:</strong> {{ $cliente->razaoSocial }}<br>
    </div>

@if($endereco)
    <div>
        <h3>Endereço</h4>
        <div>
            <strong>Endereço:</strong> {{ $endereco->endereco }}<br>
            <strong>Cidade:</strong> {{ $endereco->cidade }}<br>
            <strong>Estado:</strong> {{ $endereco->estado }}<br>
            <strong>CEP:</strong> {{ $endereco->cep }}<br>
        </div>
    </div>
@else
    <div>
        <h4>Endereço</h4>
        <div>
            <strong>Endereço:</strong> Não disponível<br>
            <strong>Cidade:</strong> Não disponível<br>
            <strong>Estado:</strong> Não disponível<br>
            <strong>CEP:</strong> Não disponível<br>
        </div>
    </div>
@endif
