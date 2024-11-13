@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="flex-row card-header">
                    <h5 class="mb-0 card-title">Ordem de serviços</h5>
                
                   
                <div class="d-flex justify-content-between mb-3 mt-3">
                    <!-- barra de pesquisa -->
                        <div class="input-group input-group w-50 w-sm-75 border-secondary border-bottom">
                            <div class="input-group-prepend d-none d-md-block">
                                <button id="searchBtn" class="btn input-group-text rounded-0 rounded-start border-0 ">
                                    <i class="ri-search-line"></i>
                                </button>
                            </div>
                                <input id="search" type="text" class="form-control border-0" placeholder="Buscar..." aria-label="Sizing example input" aria-describedby="Search">
                        </div>

                        <!-- botão de adicionar peça-->
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                                +Ordem
                        </button>                  
                </div>

                
                <div class="card-body table-responsive">

                        <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                            style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="cursor-pointer text-truncate" data-ordering="false">Data de Inicio</th>
                                    <th class="cursor-pointer text-truncate" data-ordering="false">Tipo de serviço</th>
                                    <th class="cursor-pointer" data-ordering="false" >Cliente</th>
                                    <th class="cursor-pointer" data-ordering="false">Veiculo</th>
                                    <th class="cursor-pointer text-truncate" data-ordering="false">Peças utilizadas</th>
                                    <td class="text-center">Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services_order as $dadosOrdem)
                                    <tr>
                                        <td class="text-truncate">{{ $dadosOrdem->cliente->nome ?? 'N/A' }}</td>
                                        <td class="text-truncate">{{ $dadosOrdem->veiculo->modelo ?? 'N/A' }}</td>
                                        <td class="text-truncate">{{ $dadosOrdem->servico->tipo ?? 'N/A' }}</td>
                                        <td class="text-truncate">{{ $dadosOrdem->almoxarifado->nome ?? 'N/A' }}</td>

                                        <td class="text-truncate">
                                            <button class="btn btn-soft-secondary btn-sm" type="button" aria-expanded="false">
                                                <a href="{{ route('services_order.edit', $dadosOrdem->id) }}">
                                                    <i class="align-bottom ri-pencil-fill"></i>Editar
                                                </a>
                                            </button>

                                            <button class="btn btn-soft-secondary btn-sm bg-danger text-dark" type="button" onclick="confirmDelete({{ $dadosOrdem->id }})" aria-expanded="false">
                                                <i class="align-bottom ri-delete-bin-fill bg-danger"></i>Deletar
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                   
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection