<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-content-center">
                <h3 class="card-title mb-0 align-content-center">Lista de Clientes</h3>
                <input class="form-control me-2 input-group-sm w-25" type="search" placeholder="Search"
                    aria-label="Search" id="search_clientes" oninput="searchList('clientes')">
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                    style="width:100%">
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
                    <tbody id="table-body-clientes">
                        @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                        value="option1">
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
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-home align-middle"></i>...
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item view-client-btn" data-id="{{ $cliente->id }}"
                                                wire:click="confirmView({{ $cliente->id }})">
                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item edit-client-btn" data-id="{{ $cliente->id }}"
                                                wire:click="confirmEdit({{ $cliente->id }})">
                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item delete-client-btn" data-id="{{ $cliente->id }}"
                                                wire:click="confirmDelete({{ $cliente->id }})">
                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                            </button>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- View Modal -->
@if($showViewModal)
<div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="viewClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="viewClientModalLabel">Detalhes do Cliente</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="$set('showViewModal', false)"></button>
            </div>
            <div class="modal-body">
                @include('clientes.view')
            </div>
        </div>
    </div>
</div>
@endif

<!-- Edit Modal -->
@if($showEditModal)
<div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="editClientModalLabel">Editar Cliente</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="$set('showEditModal', false)"></button>
            </div>
            <div class="modal-body">
                @include('clientes.edit')
            </div>
        </div>
    </div>
</div>
@endif

<!-- Delete Modal -->
@if($showDeleteModal)
<div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="deleteClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="deleteClientModalLabel">Excluir Cliente</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="$set('showDeleteModal', false)"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir este cliente?</p>
                <div class="justify-content-between align-content-between">
                    <button wire:click="delete" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        wire:click="$set('showDeleteModal', false)">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>