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
                            style="width:100%;">
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
                                    <th>Ações</th>
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
                                        <td class="text-truncate" title="{{ $warehouse_itens->compatibility }}" style="max-width: 15vw;">{{ $warehouse_itens->compatibility }}</td>   
                                        <td class="text-truncate">
                                            <button class="btn btn-soft-secondary btn-sm" type="button" aria-expanded="false">
                                                <a href="{{ route('warehouse.edit', $warehouse_itens->id) }}"><i class="ri-pencil-fill align-bottom text-muted"></i>Edit</a>
                                            </button>
                                            <!--redirecionamento para a pagina de cadastro porem com as informações preenchidas-->

                                            <button class="btn btn-soft-secondary btn-sm bg-danger text-dark"   type="button" aria-expanded="false">
                                               <a href="{{ route('warehouse.destroy', $warehouse_itens->id) }}"> <i class="ri-delete-bin-fill bg-danger align-bottom "></i>Delete</a>
                                            </button>
                                            <!--por um aviso de certeza e talvez um codigo de confirmação-->
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