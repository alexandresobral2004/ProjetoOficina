<?php

namespace App\Livewire;

use Livewire\Component;

class FormNewUser extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
@include('layouts.messages.message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h3 class="card-title mb-0 flex-grow-1">Cadastro de Usuário</h3>
                            <span>(*) Campos obrigatórios</span>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST">
@csrf
                                <input type="hidden" name="id"
                                    value="{{ $obj->id ?? '' }}">
                            <div class="live-preview">

                                    <div class="row  mt-1">
                                        <div class="col-xx-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }}">
                                                <label>{{ __('Tipo de Usuário*') }}</label>
                                                <select name="role" id="role" class="form-control">
                                                    <option value=" ">Selecione</option>
                                                    <option value="user">User</option>
                                                    <option value="admin">Admin</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xx-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                                <label>{{ __('Status do Usuário*') }}</label>
                                                <select name="role" id="role" class="form-control">
                                                    <option value=" ">Selecione</option>
                                                    <option value="1">Ativo</option>
                                                    <option value="0">Inativo</option>
                                                </select>

                                            </div>
                                        </div> 

                                    </div>
                                    <div class="row  mt-2">
                                        <div class=" col-xxl-4 col-md-4">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <label>{{ __('Nome*') }}</label>
                                                <input id="name" type="text" name="name"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Nome') }}"
                                                    value="{{ old('name', $obj->name ?? '') }}"
                                                    required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  mt-2">
                                        <div class=" col-xxl-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                                <label>{{ __('CPF') }}</label>
                                                <input id="cpf" type="text" name="cpf"
                                                    class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Seu CPF') }}"
                                                    value="{{ old('name', $obj->cpf ?? '') }}">

                                            </div>
                                        </div>
                                        <div class=" col-xxl-2 col-md-2">
                                            <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                                                <label>{{ __('CNPJ') }}</label>
                                                <input id="cnpj" type="text" name="cnpj"
                                                    class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('CNPJ (Para empresas)') }}"
                                                    value="{{ old('name', $obj->cpf ?? '') }}">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row  mt-2">
                                        <div class="col-xxl-3 col-md-3">
                                                <div
                                                    class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                    <label>{{ __('E-mail*') }}</label>
                                                    <input id="email" type="mail" name="email"
                                                        class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                                        placeholder="{{ __('seuemail@email.com.br') }}"
                                                        value="{{ old('email', $obj->email ?? '') }}"
                                                        required>

                                                </div>

                                        </div>
                                        <div class="col-xxl-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                                <label>{{ __('Fone*') }}</label>
                                                <input id="fone" type="text" name="fone"
                                                    class="form-control{{ $errors->has('fone') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('(00) 00000-0000)') }}"
                                                    value="{{ old('fone', $obj->fone ?? '') }}"
                                                    required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  mt-2">
                                        <div class="col-xxl-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                                <label>{{ __('Senha*') }}</label>
                                                <input id="password" type="password" name="password"
                                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('Senha') }}"
                                                value="{{ old('password', $obj->password ?? '') }}"
                                                required>

                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-md-2">
                                            <div
                                                class="form-group{{ $errors->has('confirm_password') ? ' has-danger' : '' }}">
                                                <label>{{ __('Confirme a senha*') }}</label>
                                                <input id="confirm_password" type="password" name="confirm_password"
                                                    class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Confirme a senha') }}"
                                                    value="{{ old('confirm_password', $obj->confirm_password ?? '') }}"
                                                    required>
                                            </div>
                                        </div>

                                    </div>
                                    
                                        
                                        
                                    


                                </div>

                                   <div class="row gy-4 mt-2">
                                       <div class="col-xxl-3 col-md-3">
                                           <button type="submit" class="btn btn-primary">Salvar</button>
                                       </div>

                                   </div>
                           </div>
                         

                       </div>
                       </form>

                   </div>

               </div>
                 <div class="row  mt-2">
                     <livewire:dataTable />
                 </div>
               </div>
               
               </div>
               
                <script>
              

                   //Mascara  para FONE, CPF e CNPJ
                   Inputmask({
                       mask: '(99) 99999-9999'
                   }).mask(document.getElementById('fone'));

                   Inputmask({
                       mask: '999.999.999-99'
                   }).mask(document.getElementById('cpf'));

                   Inputmask({
                       mask: '99.999.999/999-99'
                   }).mask(document.getElementById('cnpj'));
               </script>


               </div>
        </div>
HTML;
    }
}
