<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <input class="form-control me-2 input-group-sm w-25" type="search" placeholder="Search"
                    aria-label="Search" id="search_employee" oninput="searchList('employee')">

                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#newEmployeeModal">
                    Novo Funcionário
                </button>
            </div>
            <div class="card-body table-responsive">
                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                    style="width:100%">
                    <thead>
                        <tr>
                            <!-- <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th> -->
                            <th data-ordering="false">Nome</th>
                            <th data-ordering="false">CPF</th>
                            <th data-ordering="false">data de nascimento</th>
                            <th data-ordering="false">Telefone</th>
                            <th data-ordering="false">Cargo</th>
                        </tr>
                    </thead>
                    <tbody id="table-body-employee">
                        @foreach ($funcionarios as $funcionario)
                        <tr>
                            <!-- <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                        value="option1">
                                </div>
                            </th> -->
                            <td>{{ $funcionario->nome . ' ' . $funcionario->sobrenome }}</td>
                            <td>{{ $funcionario->cpf}}</td>
                            <td>{{ old('data_nascimento',
                                \Carbon\Carbon::parse($funcionario->data_nascimento)->format('d/m/Y')) }}
                            </td>
                            <td>{{ $funcionario->telefone }}</td>
                            <td>{{ $funcionario->cargo }}</td>
                            <td>
                                <div class="dropdown d-inline-block d-flex justify-content-center align-items-center">
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="align-middle fa fa-home"></i>...
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item view-employee-btn"
                                                data-id="{{ $funcionario->id }}" data-bs-toggle="modal"
                                                data-bs-target="#viewEmployeeModal">
                                                <i class="align-bottom ri-eye-fill me-2 text-muted"></i> View
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item edit-employee-btn"
                                                data-id="{{ $funcionario->id }}" data-bs-toggle="modal"
                                                data-bs-target="#editEmployeeModal">
                                                <i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item delete-employee-btn"
                                                data-id="{{ $funcionario->id }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteEmployeeModal">
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
            <!-- Modal para visualização de funcionário específico -->
            <div class="mb-5 modal fade" id="viewEmployeeModal" tabindex="-1" aria-labelledby="viewEmployeeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="viewEmployeeModalLabel">Detalhes do funcionário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="employeeDetails">
                            <!-- Os detalhes do funcionário serão carregados aqui via AJAX -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal para edição de funcionário -->
            <div class="mb-5 modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editEmployeeModalLabel">Editar funcionário</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editEmployeeDetails">
                            <!-- Formulário será carregado aqui -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal para confirmação de exclusão de funcionário -->
            <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="deleteEmployeeModalLabel">Confirmar Exclusão</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span>Tem certeza que deseja deletar este funcionário?</span>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteEmployeeForm" action="" method="POST" style="display: inline;">
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
        const viewButtons = document.querySelectorAll('.view-employee-btn');
        const employeeDetails = document.getElementById('employeeDetails');

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                const employeeId = this.getAttribute('data-id');
                const url = `/funcionarios/${employeeId}`;
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        employeeDetails.innerHTML = data;
                    });
            });
        });

        const deleteButtons = document.querySelectorAll('.delete-employee-btn');
        const deleteEmployeeForm = document.getElementById('deleteEmployeeForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const employeeId = this.getAttribute('data-id');
                const actionUrl = `/funcionarios/${employeeId}`;
                deleteEmployeeForm.setAttribute('action', actionUrl);
            });
        });

        const editButtons = document.querySelectorAll('.edit-employee-btn');
        const editEmployeeDetails = document.getElementById('editEmployeeDetails');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const employeeId = this.getAttribute('data-id');
                const url = `/funcionarios/${employeeId}/edit`;

                // Faz a requisição para carregar os dados do funcionário
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        editEmployeeDetails.innerHTML = data;
                    });
            });
        });
    });
</script>