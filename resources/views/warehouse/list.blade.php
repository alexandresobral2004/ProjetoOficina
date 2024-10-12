@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Almoxarifado</h5>
                </div>
                <div class="card-body">

                    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                            Adicionar Peça
                    </button>

                    <div class="table-responsive">
                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                            style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">SKU</th>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">Nome da peça</th>
                                    <th class="cursor-pointer" data-ordering="false" >Quantidade</th>
                                    <th class="cursor-pointer" data-ordering="false">Modelo</th>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">Marca</th>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">Margem de lucro (%)</th>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">Preço de custo</th>
                                    <th class="text-truncate cursor-pointer" data-ordering="false">Preço final</th>
                                    <th class="cursor-pointer text-center" colspan="2" data-ordering="false">Compatibilidade</th>
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
                                            <button onclick="atualizarModal('{{ $warehouse_itens->compatibility }}')" type="button" class="btn btn-sm bg-secondary text-white" style="margin-left: auto;" data-toggle="modal" data-target="#CompatibilidadeModal">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </td>

                                        <td class="text-truncate">
                                            <button class="btn btn-soft-secondary btn-sm" type="button" aria-expanded="false">
                                                <a href="{{ route('warehouse.edit', $warehouse_itens->id) }}">
                                                    <i class="ri-pencil-fill align-bottom"></i>Editar</a>
                                            </button>

                                            <button class="btn btn-soft-secondary btn-sm bg-danger text-dark" type="button" onclick="confirmDelete({{ $warehouse_itens->id }})" aria-expanded="false">
                                                <i class="ri-delete-bin-fill bg-danger align-bottom"></i>Deletar
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <!-- Modal de compatibilidade --> <!--ainda não ta funcionando-->
    <div class="modal fade" id="CompatibilidadeModal" tabindex="-1" aria-labelledby="CompatibilidadeModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CompatibilidadeModalLabel">Compatibilidade</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="compatibilidade"></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de confirmação de exclusão -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de compatibilidade -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compatibilidades</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de Cadastro -->
    <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">Cadastro de Peças: Almoxarifado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('warehouse.store') }}" method="POST"> <!-- alterar para o warehouse  -->
                        @csrf
                        <div class="live-preview">
                            <!-- Todo o conteúdo do formulário de cadastro -->
                            <div class="card">

                                        <div class="card-body">
                                                    <div class="row mt-2">
                                                        <!-- Primeira célula de cadastro: cod -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('cod') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Código') }}</label>
                                                                <input id="cod" type="number" name="cod"
                                                                    class="form-control{{ $errors->has('cod') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('cod', $obj->cod ?? '') }}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Segunda célula de cadastro: Nome da Peça -->
                                                        <div class="col-xxl-4 col-md-4">
                                                            <!-- Mesmo comportamento, ajusta o número de colunas -->
                                                            <div class="form-group{{ $errors->has('nome_peca') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Nome da Peça') }}</label>
                                                                <input id="nome_peca" type="text" name="nome_peca"
                                                                    class="form-control{{ $errors->has('nome_peca') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('nome_peca', $obj->nome_peca ?? '') }}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Terceira célula de cadastro: Quantidade -->
                                                        <div class="col-xxl-2 col-md-2">
                                                            <!-- Mantém 4 colunas em telas grandes e 6 em médias -->
                                                            <div class="form-group{{ $errors->has('qtde') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Estoque(Qtde)') }}</label>
                                                                <input id="qtde" type="number" min="0" name="qtde"
                                                                    class="form-control{{ $errors->has('qtde') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('qtde', $obj->qtde ?? '') }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Linha de divisão 2º -->
                                                    <div class="row mt-2">
                                                        <!-- oitava celula de cadastro: modelo -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Modelo') }}</label>
                                                                <input id="modelo" type="text" name="modelo"
                                                                    class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('modelo', $obj->modelo ?? '') }}" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- decima-primeira celula de cadastro: Origem (Fabricante/Fornecedor) -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Marca/Fabricante') }}</label>
                                                                <input id="marca" type="text" name="marca"
                                                                    class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                                                                    placeholder="{{ __('Origem (Fabricante/Fornecedor)') }}"
                                                                    value="{{ old('marca', $obj->marca ?? '') }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <!-- Linha de divisão 3º -->
                                                    <div class="row mt-2">
                                                        <!-- sexta celula de cadastro: menor_preco -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('margem') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Margem de Lucro(%)') }}</label>
                                                                <input id="margem" type="number" min="0" name="margem"
                                                                    class="form-control{{ $errors->has('margem') ? ' is-invalid' : '' }}"
                                                                    placeholder="{{ __('%') }}"
                                                                    value="{{ old('margem', $obj->margem ?? '') }}" required
                                                                    oninput="calcularPrecoFinal()">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- quinta celula de cadastro: maior_preco -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('preco_custo') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Preço de custo: R$') }}</label>
                                                                <input id="preco_custo" type="number" min="0" name="preco_custo"
                                                                    class="form-control{{ $errors->has('preco_custo') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('preco_custo', $obj->preco_custo ?? '') }}" required
                                                                    oninput="calcularPrecoFinal()">
                                                            </div>
                                                        </div>

                                                        <!-- setima celula de cadastro: media_preco -->
                                                        <div class="col-xxl-3 col-md-3">
                                                            <div class="form-group{{ $errors->has('preco_final') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Preço Final : R$') }}</label>
                                                                <input id="preco_final" type="number" name="preco_final"
                                                                    class="form-control{{ $errors->has('preco_final') ? ' is-invalid' : '' }}"
                                                                    value="" required readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Linha de divisão 4º -->
                                                    <div class="row mt-2">
                                                        <!-- decima celula de cadastro: compatibilidade -->
                                                        <div class="container mt-1">
                                                            <div class="form-group{{ $errors->has('compatibility') ? ' has-danger' : '' }}">
                                                                <label>{{ __('Veículos Compatíveis(Descreva os automóveis compatíveis e o anode fabricação )') }}</label>
                                                                <textarea style="width: 100%" id="compatibility" type="textarea" rows="3" cols="50" name="compatibility"
                                                                    placeholder="Gol(G3) 2015, 2016 | Saveiro (G3) 2015, 2016"
                                                                    class="form-control{{ $errors->has('compatibility') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('compatibility', $obj->compatibility ?? '') }}" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-xxl-3 col-md-3">
                                                            <button type="submit" class="btn btn-primary" onclick="ClearInputs()">Salvar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function atualizarModal(conteudo) {
            document.getElementById('compatibilidade').innerText = conteudo;
        }
        // Função para confirmar a exclusão
        function confirmarDelete(id) {
            // Configura a rota
            const form = document.getElementById('deleteForm');
            form.action = `/warehouse/${id}`;

            // Abre o modal
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }

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
        function ClearInputs(){
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
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection