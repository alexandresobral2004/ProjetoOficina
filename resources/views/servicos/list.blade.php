<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <input class="form-control me-2 input-group-sm w-25" type="search" placeholder="Search"
                    aria-label="Search" id="search_services" oninput="searchList('services')">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#newServiceModal">
                    Novo Serviço
                </button>
            </div>
            <div class="card-body table-responsive">
                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                    style="width:100%">
                    <thead>
                        <tr>

                            <th>Cliente</th>
                            <th>Veículo</th>
                            <th>Data de Início</th>
                            <th>Data de Término</th>
                            <th>Status</th>
                            <th>Valor Total</th>
                        </tr>
                    </thead>
                    <tbody id="table-body-services">
                        @foreach ($servicos as $servico)
                        <tr>

                            <td>{{ $servico->cliente->name ?? 'N/A' }}</td>
                            <td>{{ $servico->veiculo->modelo ?? 'N/A' }}</td>
                            <td>{{ $servico->data_inicio }}</td>
                            <td>{{ $servico->data_termino ? $servico->data_termino : 'N/A' }}</td>
                            <td>{{ $servico->status }}</td>
                            <td>R$ {{ number_format($servico->valor_total, 2, ',', '.') }}</td>
                            <td>
                                <div class="dropdown d-inline-block d-flex justify-content-center align-items-center">
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="align-middle fa fa-cog"></i>...
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item view-service-btn" data-id="{{ $servico->id }}"
                                                data-bs-toggle="modal" data-bs-target="#viewServiceModal">
                                                <i class="align-bottom ri-eye-fill me-2 text-muted"></i> Ver
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item edit-service-btn" data-id="{{ $servico->id }}"
                                                data-bs-toggle="modal" data-bs-target="#editServiceModal">
                                                <i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Editar
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item delete-service-btn"
                                                data-id="{{ $servico->id }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteServiceModal">
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

            <!-- Modal para visualização de serviço específico -->
            <div class="mb-5 modal fade" id="viewServiceModal" tabindex="-1" aria-labelledby="viewServiceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="viewServiceModalLabel">Detalhes do Serviço</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="serviceDetails">
                            <!-- Detalhes do serviço serão carregados aqui via AJAX -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para edição de serviço -->
            <div class="mb-5 modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editServiceModalLabel">Editar Serviço</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editServiceDetails">
                            <!-- Formulário de edição será carregado aqui -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para confirmação de exclusão de serviço -->
            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="deleteServiceModalLabel">Confirmar Exclusão</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span>Tem certeza que deseja deletar este serviço?</span>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteServiceForm" action="" method="POST" style="display: inline;">
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
        const viewButtons = document.querySelectorAll('.view-service-btn');
        const serviceDetails = document.getElementById('serviceDetails');

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const serviceId = this.getAttribute('data-id');
                const url = `/servicos/${serviceId}`;
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        serviceDetails.innerHTML = data;
                    });
            });
        });

        const deleteButtons = document.querySelectorAll('.delete-service-btn');
        const deleteServiceForm = document.getElementById('deleteServiceForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const serviceId = this.getAttribute('data-id');
                const actionUrl = `/servicos/${serviceId}`;
                deleteServiceForm.setAttribute('action', actionUrl);
            });
        });

        const editButtons = document.querySelectorAll('.edit-service-btn');
        const editServiceDetails = document.getElementById('editServiceDetails');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const serviceId = this.getAttribute('data-id');
                const url = `/servicos/${serviceId}/edit`;

                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        editServiceDetails.innerHTML = data;
                    });
            });
        });
    });
</script>
