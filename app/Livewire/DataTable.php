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
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Datatable.</h5>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
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
                            <th>Status</th>
                            <th>Prioridade</th>
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

                                        <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a>
                                                    </li>
                                                    <li><a href="{{ route('user.edit', $user->id) }}"
                                                            class="dropdown-item edit-item-btn"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        {{-- <a href="{{ route('user.destroy', $user->id) }}"
                                                        class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                        </a> --}}
                                                        {{-- <a href="#" class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                            data-user-id="{{ $user->id }}"
                                                        data-user-name="{{ $user->name }}">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                        </a> --}}
                                                        <button type="button" class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal_{{ $user->id }}">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
