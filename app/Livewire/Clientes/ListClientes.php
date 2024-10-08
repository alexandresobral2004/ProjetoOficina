<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;
class ListClientes extends Component
{
    public $clientes;

    public function mount()
    {
        $this->clientes = Cliente::all();
    }

    public function render()
    {
        return <<<'HTML'
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Lista de Clientes.</h5>
                            </div>
                            <div class="card-body">
                                <table id="table-gridjs"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th>
                                            <th data-ordering="false">Nome</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Telefone</th>
                                            <th data-ordering="false">CPF</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@foreach($clientes as $cliente)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ $cliente->name }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td>{{ $cliente->fone }}</td>
                                                <td>{{ $cliente->cpf }}</td>
                                                <td>
                                                    <div
                                                        class="dropdown d-inline-block d-flex justify-content-center align-items-center ">
                                                        <style>
                                                            ::marker {
                                                                content: none;
                                                            }
                                                        </style>
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            {{-- <li><a href="#!" class="dropdown-item"><i
                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li> --}}
                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn">
                                                                    <i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
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
                    <!--end col-->
                    
                </div>
                <!--end row-->
                

HTML;
    }
}
