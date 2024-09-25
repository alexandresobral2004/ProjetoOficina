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
                    <form action="{{ route('warehouse.store') }}" method="POST"> <!-- alterar para o warehouse  -->
                        @csrf
                        <div class="live-preview">
                            <div class="row mt-2">
                                <!-- Primeira célula de cadastro: cod -->
                                <div class="col-xxl-3 col-md-3">
                                    <!-- Em telas grandes, 4 colunas. Em telas médias, 6 colunas -->
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
                                            class="form-control{{ $errors->has('qtde') ? ' is-invalid' : '' }}" 4444444444
                                            value="{{ old('qtde', $obj->qtde ?? '') }}" required>
                                    </div>
                                </div>


                            </div>

                            <div class="row mt-2">

                                <div class="col-xxl-3 col-md-3"><!-- oitava celula de cadastro: modeloo -->
                                    <div class="form-group{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                                        <!-- MULTISELETOR COM AS modeloOS DISPONIVEIS -->
                                        <label>{{ __('Modelo') }}</label>
                                        <input id="modelo" type="text" name="modelo"
                                            class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}"
                                            value="{{ old('modelo', $obj->modelo ?? '') }}" required>
                                    </div>
                                    <!--<div> tela de cadastro de modelos </div>-->
                                </div>
                                <div class="col-xxl-3 col-md-3">
                                    <!-- decima celula de cadastro: compatibilidade -->
                                    <div class="form-group{{ $errors->has('compatibility') ? ' has-danger' : '' }}">
                                        <label>{{ __('Veículos Compatíveis') }}</label>
                                        <!-- MULTISELETOR COM AS COMPATIBILIDADES -->
                                        <input id="compatibility" type="text" name="compatibility"
                                            class="form-control{{ $errors->has('compatibility') ? ' is-invalid' : '' }}"
                                            value="{{ old('compatibility', $obj->compatibility ?? '') }}" required>
                                    </div>
                                    <!--<div> tela de cadastro de compatibilidades </div>-->
                                </div>



                                <div class="col-xxl-3 col-md-3"><!-- sexta celula de cadastro: menor_preco -->
                                    <div class="form-group{{ $errors->has('margem') ? ' has-danger' : '' }}">
                                        <label>{{ __('Margem de Lucro(%)') }}</label>
                                        <input id="margem" type="number" min="0" name="margem"
                                            class="form-control{{ $errors->has('margem') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('%') }}"
                                            value="{{ old('margem', $obj->margem ?? '') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">

                                <div class="col-xxl-3 col-md-3">
                                    <!-- quinta celula de cadastro: maior_preco -->
                                    <div class="form-group{{ $errors->has('preco_custo') ? ' has-danger' : '' }}">
                                        <label>{{ __('Preço de custo(R$)') }}</label>
                                        <input id="preco_custo" type="number" min="0" name="preco_custo"
                                            class="form-control{{ $errors->has('preco_custo') ? ' is-invalid' : '' }}"
                                            value="{{ old('preco_custo', $obj->preco_custo ?? '') }}" required>
                                    </div>

                                </div>

                                <div class="col-xxl-3 col-md-3">
                                    <!-- setima celula de cadastro: media_preco -->
                                    <div class="form-group{{ $errors->has('preco_final') ? ' has-danger' : '' }}">
                                        <label>{{ __('Preço Final') }}</label>
                                        <!-- A MEDIA DE PREÇO SERÁ GERADA AUTOMATICAMENTE ASSIM QUE O CAMPO DE MENOR PREÇO FOR PREENCHIDO-->

                                        <input id="preco_final" type="number" name="preco_final"
                                            class="form-control{{ $errors->has('preco_final') ? ' is-invalid' : '' }}"
                                            value="" required readonly>
                                    </div>
                                </div>




                            </div> <!-- fim da terçeira linha de cadastro d-flex -->

                            <div class="row mt-2">



                                <div class="col-xxl-3 col-md-3">
                                    <!-- decima-primeira celula de cadastro: Origem (Fabricante/Fornecedor) -->
                                    <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                                        <label>{{ __('Marca/Fabricante') }}</label>
                                        <!-- MULTISELETOR PARA ORIGENS E FORNECEDORES DAS PECAS -->
                                        <!-- E UMA AREA DE CADASTRO DE ORIGENS E FORNECEDORES -->
                                        <input id="marca" type="text" name="marca"
                                            class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Origem (Fabricante/Fornecedor)') }}"
                                            value="{{ old('marca', $obj->marca ?? '') }}" required>
                                    </div>
                                    <!--<div> mini-tela  de cadastro de origens </div>-->
                                </div>
                            </div> <!-- fim da quarta linha de cadastro d-flex -->

                            {{-- <div class="row gy-5">


                                <div class="col-xxl-3 col-md-3">
                                    <!-- decima-segunda celula de cadastro: Categoria -->
                                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                        <label>{{ __('Categoria') }}</label>
                                        <!-- MULTISELETOR PARA CATEGORIAS -->
                                        <!-- E UMA AREA DE CADASTRO DE CATEGORIAS -->
                                        <input id="category" type="text" name="category"
                                            class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('"motor", "suspensão", "freios", "transmissão", etc') }}"
                                            value="{{ old('category', $obj->category ?? '') }}" required>
                                    </div>
                                    <!--<div> mini-tela de cadastro de categorias </div>-->
                                </div>

                                <div class="col-xxl-3 col-md-3">
                                    <!-- decima-terceira celula de cadastro: Localização no estoque -->
                                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                                        <label>{{ __('Localização no estoque') }}</label>

                                        <!-- Depende de como estiver organizado-->
                                        <!-- Enumaração e Ordenação de prateleiras e caixas?-->
                                        <input id="location" type="text" name="location"
                                            class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Localização no estoque') }}"
                                            value="{{ old('location', $obj->location ?? '') }}" required>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row mt-4">
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
