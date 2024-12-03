@extends('layouts.app')

@section('content')

<div class="gap-3 row">
    <div>
        <h1 class="mb-3 h3">Clientes</h1>
        {{-- <button type="button" class="p-2 d-flex btn btn-primary align-content-center btn-sm" data-bs-toggle="modal"
            data-bs-target="#newClientModal">
            <i class="ri-add-line fs-16">
                <span>cliente</span>
            </i>
        </button> --}}
    </div>
    @livewire('Clientes.listClientes')
</div>
<!-- Modal -->
<div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="newClientModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title d-flex justify-content-between" id="newClientModalLabel ">Novo Cliente</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                @include('clientes.create')
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {

            clienteForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Impede o envio do formulário
                // Aqui você pode adicionar a lógica para salvar os dados via AJAX, se necessário
                newClientModal.hide(); // Fecha o modal
            });
        });
</script>

@endsection