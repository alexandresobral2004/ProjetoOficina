<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <input class="form-control me-2 input-group-sm w-25" type="search" placeholder="Search"
                    aria-label="Search" id="search_clientes" oninput="searchList('clientes')">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#newClientModal">
                    Novo Cliente
                </button>
            </div>
            <div class="card-body table-responsive">
                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Telefone fixo</th>
                            <th>CPF</th>
                            <th>CNPJ</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body-clientes">
                        @foreach ($clientes as $cliente)
                        <tr>
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
                                        <i class="align-middle fa fa-cog"></i>...
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item view-client-btn" data-id="{{ $cliente->id }}"
                                                data-bs-toggle="modal" data-bs-target="#viewClientModal">
                                                <i class="align-bottom ri-eye-fill me-2 text-muted"></i> Ver
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item edit-client-btn" data-id="{{ $cliente->id }}"
                                                data-bs-toggle="modal" data-bs-target="#editClientModal">
                                                <i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Editar
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item delete-client-btn" data-id="{{ $cliente->id }}"
                                                data-bs-toggle="modal" data-bs-target="#deleteClientModal">
                                                <i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i> Excluir
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal para visualização de cliente específico -->
            <div class="mb-5 modal fade" id="viewClientModal" tabindex="-1" aria-labelledby="viewClientModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="viewClientModalLabel">Detalhes do Cliente</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="clientDetails">
                            <!-- Detalhes do cliente serão carregados aqui via AJAX -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para edição de cliente -->
            <div class="mb-5 modal fade" id="editClientModal" tabindex="-1" aria-labelledby="editClientModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editClientModalLabel">Editar Cliente</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editClientDetails">
                            <!-- Formulário de edição será carregado aqui -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para confirmação de exclusão de cliente -->
            <div class="modal fade" id="deleteClientModal" tabindex="-1" aria-labelledby="deleteClientModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="deleteClientModalLabel">Confirmar Exclusão</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span>Tem certeza que deseja deletar este cliente?</span>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteClientForm" action="" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewButtons = document.querySelectorAll('.view-client-btn');
        const clientDetails = document.getElementById('clientDetails');

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const url = `/clientes/${clientId}`;
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        clientDetails.innerHTML = data;
                    });
            });
        });

        const deleteButtons = document.querySelectorAll('.delete-client-btn');
        const deleteClientForm = document.getElementById('deleteClientForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const actionUrl = `/clientes/${clientId}`;
                deleteClientForm.setAttribute('action', actionUrl);
            });
        });

        const editButtons = document.querySelectorAll('.edit-client-btn');
        const editClientDetails = document.getElementById('editClientDetails');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const clientId = this.getAttribute('data-id');
                const url = `/clientes/${clientId}/edit`;

                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        editClientDetails.innerHTML = data;
                    });
            });
        });
    });
</script>