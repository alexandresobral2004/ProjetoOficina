@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 card-title">Almoxarifado</h5>

                <button class="mb-3 btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#cadastroModal">
                    Adicionar Peça
                </button>
            </div>
            <div class="card-body table-responsive">

                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                    style="width:100%;">
                    <thead>
                        <tr>

                            <th class="cursor-pointer text-truncate" data-ordering="false">SKU</th>
                            <th class="cursor-pointer text-truncate" data-ordering="false">Peça</th>
                            <th class="cursor-pointer" data-ordering="false">Qtde</th>
                            <th class="cursor-pointer" data-ordering="false">Modelo</th>
                            <th class="cursor-pointer text-truncate" data-ordering="false">Marca</th>
                            <th class="cursor-pointer text-truncate" data-ordering="false">Margem(%)</th>
                            <th class="cursor-pointer text-truncate" data-ordering="false">Preço de custo</th>
                            <th class="cursor-pointer text-truncate" data-ordering="false">Preço final</th>
                            <th class="text-center cursor-pointer" data-ordering="false">Compatibilidade
                            </th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warehouse as $warehouse_itens)
                        <tr>

                            <td class="text-truncate">{{ $warehouse_itens->cod }}</td>
                            <td class="text-truncate">{{ $warehouse_itens->nome_peca }}</td>
                            <td class="text-truncate">{{ $warehouse_itens->qtde }}</td>
                            <td class="text-truncate">{{ $warehouse_itens->modelo }}</td>
                            <td class="text-truncate">{{ $warehouse_itens->marca }}</td>
                            <td class="text-truncate">{{ $warehouse_itens->margem }}%</td>
                            <td class="text-truncate">R$ {{ $warehouse_itens->preco_custo }}</td>
                            <td class="text-truncate">R$ {{ $warehouse_itens->preco_final }}</td>
                            <td class="text-truncate" style="max-width: 12vw;">
                                {{ $warehouse_itens->compatibility }}

                            </td>



                            <td>
                                <div class="dropdown d-inline-block">

                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="align-middle ri-more-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="{{route('warehouse.show', $warehouse_itens->id)}}"
                                                class="dropdown-item"><i
                                                    class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                View</a>
                                        </li>
                                        <li><a href="{{ route('warehouse.edit', $warehouse_itens->id) }}"
                                                class="dropdown-item edit-item-btn"><i
                                                    class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                Edit</a>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item remove-item-btn"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal_{{ $warehouse_itens->id }}">
                                                <i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                <span>Delete</span>
                                            </button>

                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        @include('layouts.modal.modalWarehouse')
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->


<!-- Modal de Cadastro -->
@livewire('warehouse.EditWarehouse')

<script>
    //  function atualizarModal(conteudo) {
    //     document.getElementById('compatibilidade').innerText = conteudo;
    // } 

    // Função para confirmar a exclusão
    /*    function confirmDelete(id) {
            // Configura a rota
            const form = document.getElementById('deleteForm');
            form.action = `/warehouse/${id}`;
    
            // Abre o modal
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }*/

    // calcula o preco final em relação ao preço de produção e margem de lucro
    function calcularPrecoFinal() {
        let precoCusto = parseFloat(document.getElementById('preco_custo').value) || 0;
        let margemLucro = parseFloat(document.getElementById('margem').value) || 0;
        if (isNaN(precoCusto)) precoCusto = 0;
        if (isNaN(margemLucro)) margemLucro = 0;
        let precoFinal = precoCusto + (precoCusto * margemLucro / 100);
        document.getElementById('preco_final').value = precoFinal.toFixed(2);
    }

    // limpa os campos de cadastro
    function ClearInputs() {
        document.getElementsByTagName('texarea', 'input').value = "";
    }

    // identifica o titulo da coluna e adiciona o evento de click
    document.querySelectorAll('th').forEach((th, index) => {
        th.addEventListener('click', () => sortTable(index));
    });

    // função de ordenação
    function sortTable(columnIndex) {
        const table = document.querySelector('table');
        const rows = Array.from(table.querySelectorAll('tbody tr'));
        const isAscending = table.dataset.sortOrder === 'asc';

        rows.sort((rowA, rowB) => {
            const cellA = rowA.cells[columnIndex].textContent.trim().toLowerCase();
            const cellB = rowB.cells[columnIndex].textContent.trim().toLowerCase();

            if (!isNaN(cellA) && !isNaN(cellB)) {
                return isAscending ? cellA - cellB : cellB - cellA;
            } else {
                return isAscending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
            }
        });

        rows.forEach(row => table.querySelector('tbody').appendChild(row));

        table.dataset.sortOrder = isAscending ? 'desc' : 'asc';

    }
</script>



@endsection
