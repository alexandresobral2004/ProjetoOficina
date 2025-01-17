@extends('layouts.app')

@section('content')
<div class="row gap-3">
    <div>
        <h1 class="h3 mb-3">Veículos</h1>
        {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
            data-bs-target="#newVehicleModal">
            Novo Veículo
        </button> --}}
    </div>
    @include('veiculos.list')
</div>

<!-- Modal -->
<div class="modal fade" id="newVehicleModal" tabindex="-1" aria-labelledby="newVehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w-auto">
            <div class="modal-header">
                <h4 class="modal-title" id="newVehicleModalLabel">Cadastrar Novo Veículo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('veiculos.create')
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
            const clienteForm = document.getElementById('vehicleForm');
            const newVehicleModal = new bootstrap.Modal(document.getElementById('newVehicleModal'));

            vehicleForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Impede o envio do formulário
                // Aqui você pode adicionar a lógica para salvar os dados via AJAX, se necessário
                newVehicleModal.hide(); // Fecha o modal
            });
        });
</script>
@endsection