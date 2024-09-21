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
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-truncate" data-ordering="false">SKU</th>
                                    <th class="text-truncate" data-ordering="false">Nome da peça</th>
                                    <th data-ordering="false">Quantidade</th>
                                    <th data-ordering="false">Qualidade</th>
                                    <th class="text-truncate" data-ordering="false">Maior preço</th>
                                    <th class="text-truncate" data-ordering="false">Menor preço</th>
                                    <th class="text-truncate" data-ordering="false">Média de preço</th>
                                    <th data-ordering="false">Modelo</th>
                                    <th data-ordering="false">Marca</th>
                                    <th data-ordering="false">Compatibilidade</th>
                                    <th class="text-truncate" data-ordering="false">Origem (Fabricante/Fornecedor)</th>
                                    <th data-ordering="false">Categoria</th>
                                    <th class="text-truncate" data-ordering="false">Localização no estoque</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($warehouse as $warehouse_itens)
                                    <tr>
                                        <td class="text-truncate">{{ $warehouse_itens->sku }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->part_name }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->quantity }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->quality }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->highest_price }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->lowest_price }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->media_price }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->model }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->brand }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->compatibility }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->source }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->category }}</td>
                                        <td class="text-truncate">{{ $warehouse_itens->location }}</td>
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
                                                    {{-- <li><a href="#!" class="dropdown-item"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li> --}}
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