<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <h5 class="card-title mb-0">Tabela de Serviços</h5>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newServiceModal">
                    Novo Serviço
                </button>
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
                            <th>Cliente</th>
                            <th>Veículo</th>
                            <th>Data de Início</th>
                            <th>Data de Término</th>
                            <th>Status</th>
                            <th>Valor Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicos as $servico)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $servico->cliente->name ?? 'N/A' }}</td>
                                <td>{{ $servico->veiculo->modelo ?? 'N/A' }}</td>
                                <td>{{ $servico->data_inicio }}</td>
                                <td>{{ $servico->data_termino ? $servico->data_termino : 'N/A' }}</td>
                                <td>{{ $servico->status }}</td>
                                <td>R$ {{ number_format($servico->valor_total, 2, ',', '.') }}</td>
                                <td>
                                    <div class="dropdown d-inline-block d-flex justify-content-center align-items-center">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-cog align-middle"></i>...
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button class="dropdown-item view-service-btn" data-id="{{ $servico->id }}" data-bs-toggle="modal" data-bs-target="#viewServiceModal">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Ver
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item edit-service-btn" data-id="{{ $servico->id }}" data-bs-toggle="modal" data-bs-target="#editServiceModal">
                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Editar
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item delete-service-btn" data-id="{{ $servico->id }}" data-bs-toggle="modal" data-bs-target="#deleteServiceModal">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Excluir
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
            <div class="modal fade mb-5" id="viewServiceModal" tabindex="-1" aria-labelledby="viewServiceModalLabel" aria-hidden="true">
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
            <div class="modal fade mb-5" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel" aria-hidden="true">
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
            <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
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
