@extends('layouts.app')

@section('content')
    <div class="row gap-3">
        <div class="d-flex justify-content-between ">
            <h1 class="h3 mb-3">Clientes</h1>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newClientModal">
                Cadastrar Novo Cliente
            </button>
        </div>
        @include('clientes.list')
    </div>

        <!-- Modal -->
    <div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="newClientModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content w-auto">
                <div class="modal-header">
                    <h4 class="modal-title" id="newClientModalLabel">Cadastrar Novo Cliente</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('clientes.new')
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pessoaFisicaRadio = document.getElementById('pessoa_fisica');
            const pessoaJuridicaRadio = document.getElementById('pessoa_juridica');
            const dadosPessoaFisica = document.getElementById('dados_pessoa_fisica');
            const dadosPessoaJuridica = document.getElementById('dados_pessoa_juridica');
            const clienteForm = document.getElementById('clienteForm');
            const newClientModal = new bootstrap.Modal(document.getElementById('newClientModal'));

            pessoaFisicaRadio.addEventListener('change', function () {
                if (this.checked) {
                    dadosPessoaFisica.style.display = 'block';
                    dadosPessoaJuridica.style.display = 'none';
                }
            });

            pessoaJuridicaRadio.addEventListener('change', function () {
                if (this.checked) {
                    dadosPessoaFisica.style.display = 'none';
                    dadosPessoaJuridica.style.display = 'block';
                }
            });

            clienteForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Impede o envio do formulário
                // Aqui você pode adicionar a lógica para salvar os dados via AJAX, se necessário
                newClientModal.hide(); // Fecha o modal
            });
        });
    </script>
@endsection