
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Lista de Clientes</h5>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th data-ordering="false">Nome</th>
                            <th data-ordering="false">Email</th>
                            <th data-ordering="false">Telefone</th>
                            <th data-ordering="false">Telefone fixo</th>
                            <th data-ordering="false">CPF</th>
                            <th data-ordering="false">CNPJ</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">

                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">

                                    </div>
                                </th>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->fone }}</td>
                                <td>{{ $cliente->foneFixo }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->cnpj }}</td>
                                <td>
                                    <div class="dropdown d-inline-block d-flex justify-content-center align-items-center">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-home align-middle"></i>...
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button class="dropdown-item view-client-btn" data-id="{{ $cliente->id }}" data-bs-toggle="modal" data-bs-target="#viewClientModal">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item edit-client-btn" data-id="{{ $cliente->id }}" data-bs-toggle="modal" data-bs-target="#editClientModal">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item delete-client-btn" data-id="{{ $cliente->id }}" data-bs-toggle="modal" data-bs-target="#deleteClientModal">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal Area -->

                            <!-- View Modal -->
                            <div class="modal fade" id="viewClientModal" tabindex="-1" aria-labelledby="viewClientModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="viewClientModalLabel">Detalhes do Cliente</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="clientDetails">
                                            @include('clientes.view', ['cliente' => $cliente])
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            {{-- <x-modal
                                id="editClientModal"
                                labelledby="editClientModalLabel"
                                title="Editar Cliente"
                                content="clientes.edit"
                                :attributes="$cliente"
                                >@include('clientes.edit', ['cliente' => $cliente]) </x-modal>--}}
                            <div class="modal fade" id="editClientModal" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="editClientModalLabel">Editar Cliente</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('clientes.edit', ['cliente' => $cliente])
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="mb-5 modal fade" id="deleteClientModal" tabindex="-1" aria-labelledby="deleteClientModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="deleteClientModalLabel">Excluir Cliente</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir este cliente?</p>
                                            <div class="justify-content-between align-content-between">
                                                <form id="deleteClientForm" action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button wire:click="delete" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewButtons = document.querySelectorAll('.view-client-btn');
        const editButtons = document.querySelectorAll('.edit-client-btn');
        const deleteButtons = document.querySelectorAll('.delete-client-btn');
        const clientDetails = document.getElementById('clientDetails');
        const editClientDetails = document.getElementById('editClientDetails');
        const deleteClientForm = document.getElementById('deleteClientForm');

        // Ver cliente
        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const url = `/clientes/show/${clientId}`;
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        clientDetails.innerHTML = data;
                    });
            });
        });

        // Editar cliente
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const url = `/clientes/edit/${clientId}`; // Corrigido
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        editClientDetails.innerHTML = data;
                        const editModal = new bootstrap.Modal(document.getElementById('editClientModal'));
                        editModal.show();
                    });
            });
        });

        // Deletar cliente
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const actionUrl = `/clientes/delete/${clientId}`;
                deleteClientForm.setAttribute('action', actionUrl);
            });
        });
    });
</script>
