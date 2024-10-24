<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class DataTable extends Component
{


    public $users;
     public function mount()
     {
     // Buscando todos os usuários no banco de dados
     $this->users = User::all();
     }


    public function render()
    {
        return <<<'HTML'
        <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="flex-row card-header d-flex align-items-center justify-content-between">
                <h3 class="mb-0 card-title">Lista de Usuários</h3>
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                      data-bs-target="#newClientModal">
                      Novo Usuário
                  </button>
            </div>
            <div class="card-body table-responsive">
                <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th>ID</th>
                            <th data-ordering="false">Name</th>
                            <th data-ordering="false">E-mail</th>
                            <th data-ordering="false">Fone</th>
                             <th data-ordering="false">Tipo</th>
                            <th>Status</th>
                       
                            <th data-ordering="false">Action</th>
                        </tr>
                    </thead>
                        <tbody>
@if($users->isNotEmpty())
@foreach($users as $user)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td>{{ $user->id }}</td>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->fone }}</td>
                                        <td>{{ $user->role }}</td>

                                        <td class="text-center"><span class="badge-danger bg-light text-info" style="font-size: 14px;">
@if($user->status == 1)
                                                <span style="color: green;">Ativo</span>
@else
                                              <span style="color: red;">Inativo</span>
@endif
                                        </span></td>
                                    
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="align-middle ri-more-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="{{ route('user.show', $user->id) }}" class="dropdown-item"><i
                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                            View</a>
                                                    </li>
                                                    <li><a href="{{ route('user.edit', $user->id) }}"
                                                            class="dropdown-item edit-item-btn"><i
                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                    
                                                        <button type="button" class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal_{{ $user->id }}">
                                                            <i
                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                            <span>Delete</span>
                                                        </button>

                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
@include('layouts.modal.modalUser')

                        </tbody>
@endforeach
@else
                        <p>Nenhum usuário encontrado.</p>
@endif
                    

                </table>
            </div>
        </div>

    </div>

</div>
HTML;
    }

    
}
