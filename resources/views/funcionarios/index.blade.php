@extends('layouts.app')

@section('content')
<div class="gap-3 row">
    <div>
        <h1 class="mb-3 h3">Funcionários</h1>
        {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
            data-bs-target="#newEmployeeModal">
            Novo Funcionario
        </button> --}}
    </div>
    @include('funcionarios.list')
</div>

<!-- Modal -->
<div class="modal fade" id="newEmployeeModal" tabindex="-1" aria-labelledby="newEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="w-auto modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="newEmployeeModalLabel">Cadastrar Novo Funcionário</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('funcionarios.create')
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clienteForm = document.getElementById('employeeForm');
        const newEmployeeModal = new bootstrap.Modal(document.getElementById('newEmployeeModal'));

        employeeForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Impede o envio do formulário
            // Aqui você pode adicionar a lógica para salvar os dados via AJAX, se necessário
            newEmployeeModal.hide(); // Fecha o modal
        });
    });
</script>
@endsection