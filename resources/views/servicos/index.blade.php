@extends('layouts.app')

@section('content')
    <div class="row gap-3">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="h3 mb-3">Tabela de Serviços</h1>

        </div>
        @include('servicos.list') <!-- Listagem dos serviços -->
    </div>

    <!-- Modal para criação de novo Serviço -->
    <div class="modal fade" id="newServiceModal" tabindex="-1" aria-labelledby="newServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content w-auto">
                <div class="modal-header">
                    <h4 class="modal-title" id="newServiceModalLabel">Cadastrar Novo Serviço</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('servicos.create') <!-- Formulário de criação de novo serviço -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const serviceForm = document.getElementById('serviceForm');
            const newServiceModal = new bootstrap.Modal(document.getElementById('newServiceModal'));

            serviceForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Impede o envio do formulário
                // Aqui você pode adicionar a lógica para salvar os dados via AJAX, se necessário
                newServiceModal.hide(); // Fecha o modal
            });
        });
    </script>
@endsection
