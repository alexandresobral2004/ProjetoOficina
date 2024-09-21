@extends('layouts.app')
@section('content')
    {{-- <div class="main-content">

        <div class="page-content">
            <div class="container-fluid"> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Cadastro de Peças: Almoxarifado</h4>

                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('warehouse_itens.store') }}" method="POST"> <!-- alterar para o warehouse  -->
                        @csrf
                        <div class="live-preview">
                            <div class="row gy-4">

                                    <div class="d-flex flex-wrap"> <!-- Usar flex-wrap permite quebra em telas menores -->

                                        <!-- Primeira célula de cadastro: SKU -->
                                        <div class="col-xxl-4 col-md-3 col-sm-12"> <!-- Em telas grandes, 4 colunas. Em telas médias, 6 colunas -->
                                            <div class="form-group{{ $errors->has('sku') ? ' has-danger' : '' }}">
                                                <label>{{ __('Sku (Número de Série)') }}</label>
                                                <input id="sku" type="number" name="sku"
                                                    class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('SKU (Número de Série)') }}"
                                                    value="{{ old('sku', $obj->sku ?? '') }}" required>
                                            </div>
                                        </div>
                                        
                                        <!-- Segunda célula de cadastro: Nome da Peça -->
                                        <div class="col-xxl-4 col-md-3 col-sm-12"> <!-- Mesmo comportamento, ajusta o número de colunas -->
                                            <div class="form-group{{ $errors->has('part_name') ? ' has-danger' : '' }}">
                                                <label>{{ __('Nome da Peça') }}</label>
                                                <input id="part_name" type="text" name="part_name"
                                                    class="form-control{{ $errors->has('part_name') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Nome da peça') }}"
                                                    value="{{ old('part_name', $obj->part_name ?? '') }}" required>
                                            </div>
                                        </div>

                                        <!-- Terceira célula de cadastro: Quantidade -->
                                        <div class="col-xxl-4 col-md-3 col-sm-12"> <!-- Mantém 4 colunas em telas grandes e 6 em médias -->
                                            <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                                <label>{{ __('Quantidade') }}</label>
                                                <input id="quantity" type="number" min="0" name="quantity"
                                                    class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('quantidade de peças no estoque') }}"
                                                    value="{{ old('quantity', $obj->quantity ?? '') }}" required>
                                            </div>
                                        </div>

                                    </div> <!-- fim da primeira linha de cadastro d-flex -->

                                    <div class="d-flex flex-wrap"> <!-- Usar flex-wrap permite quebra em telas menores -->

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- quarta celula de cadastro: qualidade -->
                                            <div class="form-group{{ $errors->has('quality') ? ' has-danger' : '' }}">
                                                <label>{{ __('Qualidade/Estado da peça') }}</label>
                                            <!--Dropdown com as qualidades posiveis-->
                                                <input id="quality" type="text" name="quality"
                                                    class="form-control{{ $errors->has('quality') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Qualidade/Estado da peça') }}"
                                                    value="{{ old('quality', $obj->quality ?? '') }}" required> 
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- quinta celula de cadastro: maior_preco -->
                                            <div class="form-group{{ $errors->has('highest_price') ? ' has-danger' : '' }}">
                                                <label>{{ __('Maior preço') }}</label>
                                                <input id="highest_price" type="number" min="0" name="highest_price"
                                                    class="form-control{{ $errors->has('highest_price') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Maior Preço') }}"
                                                    value="{{ old('highest_price', $obj->highest_price ?? '') }}"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- sexta celula de cadastro: menor_preco -->
                                            <div class="form-group{{ $errors->has('lowest_price') ? ' has-danger' : '' }}">
                                                <label>{{ __('Menor preço') }}</label>
                                                <input id="lowest_price" type="number" min="0" name="lowest_price"
                                                    class="form-control{{ $errors->has('lowest_price') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Menor Preço') }}"
                                                    value="{{ old('lowest_price', $obj->lowest_price ?? '') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div> <!-- fim da segunda linha de cadastro d-flex -->

                                    <div class="d-flex flex-wrap"> <!-- Usar flex-wrap permite quebra em telas menores -->

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- setima celula de cadastro: media_preco -->
                                            <div class="form-group{{ $errors->has('media_price') ? ' has-danger' : '' }}">
                                                <label>{{ __('Média de preço') }}</label>
                                        <!-- A MEDIA DE PREÇO SERÁ GERADA AUTOMATICAMENTE ASSIM QUE O CAMPO DE MENOR PREÇO FOR PREENCHIDO-->
                                                
                                                <input id="media_price" type="number" name="media_price"
                                                    class="form-control{{ $errors->has('media_price') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Media De Preço') }}"
                                                    value="" required disabled>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- oitava celula de cadastro: modelo -->
                                            <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                                        <!-- MULTISELETOR COM AS MODELOS DISPONIVEIS -->
                                             <label>{{ __('Modelo') }}</label>
                                                <input id="model" type="text" name="model"
                                                    class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Modelo Da Peça') }}"
                                                    value="{{ old('model', $obj->model ?? '') }}"
                                                    required> 
                                            </div>
                                            <!--<div> tela de cadastro de modelos </div>-->
                                        </div>

                                        <div class="col-xxl-3 col-md-3 col-sm-12"><!-- nona celula de cadastro: marca -->
                                            <div class="form-group{{ $errors->has('brand') ? ' has-danger' : '' }}">
                                                <label>{{ __('Marca') }}</label>
                                        <!-- MULTISELETOR COM AS MARCAS -->
                                            <input id="brand" type="text" name="brand"
                                                    class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Marca da Peça') }}"
                                                    value="{{ old('brand', $obj->brand ?? '') }}"
                                                    required>
                                            </div>
                                            <!--<div> tela de cadastro de marcas </div>-->
                                        </div>
                                    </div> <!-- fim da terçeira linha de cadastro d-flex -->

                                    <div class="d-flex flex-wrap"> <!-- Usar flex-wrap permite quebra em telas menores -->
                                       
                                        <div class="col-xxl-3 col-md-4 col-sm-12"><!-- decima celula de cadastro: compatibilidade -->
                                            <div class="form-group{{ $errors->has('compatibility') ? ' has-danger' : '' }}">
                                                <label>{{ __('Compatibilidade com veiculos') }}</label>
                                        <!-- MULTISELETOR COM AS COMPATIBILIDADES -->
                                              <input id="compatibility" type="text" name="compatibility"
                                                    class="form-control{{ $errors->has('compatibility') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Compatibilidade com veiculos') }}"
                                                    value="{{ old('compatibility', $obj->compatibility ?? '') }}"
                                                    required>
                                            </div>
                                            <!--<div> tela de cadastro de compatibilidades </div>-->
                                        </div>

                                        <div class="col-xxl-3 col-md-4 col-sm-12"><!-- decima-primeira celula de cadastro: Origem (Fabricante/Fornecedor) -->
                                            <div class="form-group{{ $errors->has('source') ? ' has-danger' : '' }}">
                                                <label>{{ __('Origem (Fabricante/Fornecedor)') }}</label>
                                        <!-- MULTISELETOR PARA ORIGENS E FORNECEDORES DAS PECAS -->
                                        <!-- E UMA AREA DE CADASTRO DE ORIGENS E FORNECEDORES -->
                                                <input id="source" type="text" name="source"
                                                    class="form-control{{ $errors->has('source') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Origem (Fabricante/Fornecedor)') }}"
                                                    value="{{ old('source', $obj->source ?? '') }}"
                                                    required> 
                                            </div>
                                            <!--<div> mini-tela  de cadastro de origens </div>-->
                                        </div>
                                    </div> <!-- fim da quarta linha de cadastro d-flex -->

                                    <div class="d-flex flex-wrap"> <!-- Usar flex-wrap permite quebra em telas menores -->
                                        
                                        <div class="col-xxl-3 col-md-4 col-sm-12"><!-- decima-segunda celula de cadastro: Categoria -->
                                            <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                                <label>{{ __('Categoria') }}</label>
                                        <!-- MULTISELETOR PARA CATEGORIAS -->
                                        <!-- E UMA AREA DE CADASTRO DE CATEGORIAS -->
                                                <input id="category" type="text" name="category"
                                                    class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('"motor", "suspensão", "freios", "transmissão", etc') }}"
                                                    value="{{ old('category', $obj->category ?? '') }}"
                                                    required> 
                                            </div>
                                            <!--<div> mini-tela de cadastro de categorias </div>-->
                                        </div>

                                        <div class="col-xxl-3 col-md-4 col-sm-12"><!-- decima-terceira celula de cadastro: Localização no estoque -->
                                            <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                                                <label>{{ __('Localização no estoque') }}</label>

                                        <!-- Depende de como estiver organizado-->
                                        <!-- Enumaração e Ordenação de prateleiras e caixas?-->
                                                <input id="location" type="text" name="location"
                                                    class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Localização no estoque') }}"
                                                    value="{{ old('location', $obj->location ?? '') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div> <!-- fim da quinta linha de cadastro d-flex -->
                              
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-3">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    </div>

    {{-- </div>
    </div>

    </div> --}}
@endsection