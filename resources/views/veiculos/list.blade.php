<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <input class="form-control me-2 input-group-sm w-25" type="search" placeholder="Search"
                    aria-label="Search" id="search_vehicle" oninput="searchList('vehicle')">

                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newVehicleModal">
                    Novo Veículo
                </button>
            </div>
            <div class="card-body table-responsive">
                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th data-ordering="false">Modelo</th>
                            <th data-ordering="false">Marca</th>
                            <th data-ordering="false">Placa</th>
                            <th data-ordering="false">Ano de fabricação</th>
                            <th data-ordering="false">Proprietário</th> <!-- Alterado de 'ID proprietário' para 'Proprietário' -->
                        </tr>
                    </thead>
                    <tbody id="table-body-vehicle">
                        @foreach ($veiculos as $veiculo)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $veiculo->modelo }}</td>
                                <td>{{ $veiculo->marca }}</td>
                                <td>{{ $veiculo->placa }}</td>
                                <td>{{ $veiculo->ano_fabricacao }}</td>
                                <td>{{ $veiculo->cliente->name ?? 'N/A' }}</td> <!-- Exibe o nome do proprietário -->
                                <td>
                                    <div class="dropdown d-inline-block d-flex justify-content-center align-items-center">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="align-middle fa fa-home"></i>...
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button class="dropdown-item view-vehicle-btn" data-id="{{ $veiculo->id }}" data-bs-toggle="modal" data-bs-target="#viewVehicleModal">
                                                    <i class="align-bottom ri-eye-fill me-2 text-muted"></i> View
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item edit-vehicle-btn" data-id="{{ $veiculo->id }}" data-bs-toggle="modal" data-bs-target="#editVehicleModal">
                                                    <i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item delete-vehicle-btn" data-id="{{ $veiculo->id }}" data-bs-toggle="modal" data-bs-target="#deleteVehicleModal">
                                                    <i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i> Delete
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
            <!-- Modal para visualização de veículo específico -->
            <div class="mb-5 modal fade" id="viewVehicleModal" tabindex="-1" aria-labelledby="viewVehicleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="viewVehicleModalLabel">Detalhes do Veículo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="vehicleDetails">
                            <!-- Os detalhes do veículo serão carregados aqui via AJAX -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal para edição de veículo -->
            <div class="mb-5 modal fade" id="editVehicleModal" tabindex="-1" aria-labelledby="editVehicleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editVehicleModalLabel">Editar Veículo</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editVehicleDetails">
                            <!-- Formulário será carregado aqui -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal para confirmação de exclusão de veículo -->
            <div class="modal fade" id="deleteVehicleModal" tabindex="-1" aria-labelledby="deleteVehicleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="deleteVehicleModalLabel">Confirmar Exclusão</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span>Tem certeza que deseja deletar este veículo?</span>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteVehicleForm" action="" method="POST" style="display: inline;">
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
        const viewButtons = document.querySelectorAll('.view-vehicle-btn');
        const vehicleDetails = document.getElementById('vehicleDetails');

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const vehicleId = this.getAttribute('data-id');
                const url = `/veiculos/${vehicleId}`;
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        vehicleDetails.innerHTML = data;
                    });
            });
        });

        const deleteButtons = document.querySelectorAll('.delete-vehicle-btn');
        const deleteVehicleForm = document.getElementById('deleteVehicleForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const vehicleId = this.getAttribute('data-id');
                const actionUrl = `/veiculos/${vehicleId}`;
                deleteVehicleForm.setAttribute('action', actionUrl);
            });
        });

        const editButtons = document.querySelectorAll('.edit-vehicle-btn');
        const editVehicleDetails = document.getElementById('editVehicleDetails');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const vehicleId = this.getAttribute('data-id');
                const url = `/veiculos/${vehicleId}/edit`;

                // Faz a requisição para carregar os dados do veículo
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        editVehicleDetails.innerHTML = data;
                    });
            });
        });
    });
</script>
