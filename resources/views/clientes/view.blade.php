@props(['cliente'])

<div>
    <h3>Dados Pessoais</h3>
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

@if($cliente->endereco)
    <div>
        <h3>Endereço</h3>
        <strong>Endereço:</strong> {{ $cliente->endereco->address }}<br>
        <strong>Cidade:</strong> {{ $cliente->endereco->city }}<br>
        <strong>Estado:</strong> {{ $cliente->endereco->state }}<br>
        <strong>CEP:</strong> {{ $cliente->endereco->zip_code }}<br>
    </div>
@else
    <div>
        <h3>Endereço</h3>
        <strong>Endereço:</strong> Não disponível<br>
        <strong>Cidade:</strong> Não disponível<br>
        <strong>Estado:</strong> Não disponível<br>
        <strong>CEP:</strong> Não disponível<br>
    </div>
@endif
