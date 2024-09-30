@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Almoxarifado</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                            style="width:100%; max-height: 10vh">
                            <thead>
                                <tr>
                                    <th class="text-truncate" data-ordering="false">SKU</th>
                                    <th class="text-truncate" data-ordering="false">Nome da peça</th>
                                    <th data-ordering="false">Quantidade</th>
                                    <th data-ordering="false">Modelo</th>
                                    <th class="text-truncate" data-ordering="false">Marca</th>
                                    <th class="text-truncate" data-ordering="false">Margem de lucro (%)</th>
                                    <th class="text-truncate" data-ordering="false">Preço de custo</th>
                                    <th class="text-truncate" data-ordering="false">Preço final</th>
                                    <th data-ordering="false">Compatibilidade</th>
                                    <th>Action</th>
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
                                        <td class="text-truncate">{{ $warehouse_itens->compatibility }}</td>   
                                        <td>
                                            <div class="dropdown d-inline-block d-flex justify-content-center align-items-center ">
                                                <style>
                                                    ::marker {
                                                        content: none;
                                                    }
                                                </style>
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                   <li><a href="#!" class="dropdown-item">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
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
        </div><!--end col-->
    </div><!--end row-->
@endsection