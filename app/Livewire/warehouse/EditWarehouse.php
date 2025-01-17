<?php

namespace App\Livewire\Warehouse;

use Livewire\Component;

class EditWarehouse extends Component
{
    public function render()
    {
        return <<<'HTML'
         <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel"
             aria-hidden="true">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="cadastroModalLabel">Cadastro de Peças: Almoxarifado</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form action="{{ route('warehouse.store') }}" method="POST">
                             <!-- alterar para o warehouse  -->
@csrf
                             <div class="live-preview">
                                 <!-- Todo o conteúdo do formulário de cadastro -->
                                 <div class="card">
                                     <div class="card-body">
                                         <div class="mt-2 row">
                                             <!-- Primeira célula de cadastro: cod -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('cod') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Código') }}</label>
                                                     <input id="cod" type="number" name="cod"
                                                         class="form-control{{ $errors->has('cod') ? ' is-invalid' : '' }}"
                                                         value="{{ old('cod', $obj->cod ?? '') }}"
                                                         required>
                                                 </div>
                                             </div>

                                             <!-- Segunda célula de cadastro: Nome da Peça -->
                                             <div class="col-xxl-4 col-md-4">
                                                 <!-- Mesmo comportamento, ajusta o número de colunas -->
                                                 <div
                                                     class="form-group{{ $errors->has('nome_peca') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Nome da Peça') }}</label>
                                                     <input id="nome_peca" type="text" name="nome_peca"
                                                         class="form-control{{ $errors->has('nome_peca') ? ' is-invalid' : '' }}"
                                                         value="{{ old('nome_peca', $obj->nome_peca ?? '') }}"
                                                         required>
                                                 </div>
                                             </div>

                                             <!-- Terceira célula de cadastro: Quantidade -->
                                             <div class="col-xxl-2 col-md-2">
                                                 <!-- Mantém 4 colunas em telas grandes e 6 em médias -->
                                                 <div
                                                     class="form-group{{ $errors->has('qtde') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Estoque(Qtde)') }}</label>
                                                     <input id="qtde" type="number" min="0" name="qtde"
                                                         class="form-control{{ $errors->has('qtde') ? ' is-invalid' : '' }}"
                                                         value="{{ old('qtde', $obj->qtde ?? '') }}"
                                                         required>
                                                 </div>
                                             </div>
                                         </div>

                                         <!-- Linha de divisão 2º -->
                                         <div class="mt-2 row">
                                             <!-- oitava celula de cadastro: modelo -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Modelo') }}</label>
                                                     <input id="modelo" type="text" name="modelo"
                                                         class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}"
                                                         value="{{ old('modelo', $obj->modelo ?? '') }}"
                                                         required>
                                                 </div>
                                             </div>

                                             <!-- decima-primeira celula de cadastro: Origem (Fabricante/Fornecedor) -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Marca/Fabricante') }}</label>
                                                     <input id="marca" type="text" name="marca"
                                                         class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                                                         placeholder="{{ __('Origem (Fabricante/Fornecedor)') }}"
                                                         value="{{ old('marca', $obj->marca ?? '') }}"
                                                         required>
                                                 </div>
                                             </div>
                                         </div>


                                         <!-- Linha de divisão 3º -->
                                         <div class="mt-2 row">
                                             <!-- sexta celula de cadastro: menor_preco -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('margem') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Margem de Lucro(%)') }}</label>
                                                     <input id="margem" type="number" min="0" name="margem"
                                                         class="form-control{{ $errors->has('margem') ? ' is-invalid' : '' }}"
                                                         placeholder="{{ __('%') }}"
                                                         value="{{ old('margem', $obj->margem ?? '') }}"
                                                         required oninput="calcularPrecoFinal()">
                                                 </div>
                                             </div>

                                             <!-- quinta celula de cadastro: maior_preco -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('preco_custo') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Preço de custo: R$') }}</label>
                                                     <input id="preco_custo" type="number" min="0" name="preco_custo"
                                                         class="form-control{{ $errors->has('preco_custo') ? ' is-invalid' : '' }}"
                                                         value="{{ old('preco_custo', $obj->preco_custo ?? '') }}"
                                                         required oninput="calcularPrecoFinal()">
                                                 </div>
                                             </div>

                                             <!-- setima celula de cadastro: media_preco -->
                                             <div class="col-xxl-3 col-md-3">
                                                 <div
                                                     class="form-group{{ $errors->has('preco_final') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Preço Final : R$') }}</label>
                                                     <input id="preco_final" type="number" name="preco_final"
                                                         class="form-control{{ $errors->has('preco_final') ? ' is-invalid' : '' }}"
                                                         value="" required readonly>
                                                 </div>
                                             </div>
                                         </div>

                                         <!-- Linha de divisão 4º -->
                                         <div class="mt-2 row">
                                             <!-- decima celula de cadastro: compatibilidade -->
                                             <div class="container mt-1">
                                                 <div
                                                     class="form-group{{ $errors->has('compatibility') ? ' has-danger' : '' }}">
                                                     <label>{{ __('Veículos Compatíveis(Descreva os automóveis compatíveis e o anode fabricação )') }}</label>
                                                     <textarea style="width: 100%" id="compatibility" type="textarea"
                                                         rows="3" cols="50" name="compatibility"
                                                         placeholder="Gol(G3) 2015, 2016 | Saveiro (G3) 2015, 2016"
                                                         class="form-control{{ $errors->has('compatibility') ? ' is-invalid' : '' }}"
                                                         value="{{ old('compatibility', $obj->compatibility ?? '') }}"
                                                         required></textarea>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="mt-4 row">
                                             <div class="col-xxl-3 col-md-3">
                                                 <button type="submit" class="btn btn-primary"
                                                     onclick="ClearInputs()">Salvar</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
HTML;
    }
}
