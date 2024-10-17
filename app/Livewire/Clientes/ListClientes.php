<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;

class ListClientes extends Component
{
    public $clientes;
    public $viewingCliente;
    public $editingCliente;
    public $showViewModal = false;
    public $showEditModal = false;
    public $showDeleteModal = false;

    public function mount()
    {
        $this->clientes = Cliente::all();
    }

    public function view($clienteId)
    {
        $this->viewingCliente = Cliente::find($clienteId);
        $this->showViewModal = true;
    }

    public function edit($clienteId)
    {
        $this->editingCliente = Cliente::find($clienteId);
        $this->showEditModal = true;
    }

    public function confirmDelete($clienteId)
    {
        $this->editingCliente = Cliente::find($clienteId);
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        if ($this->editingCliente) {
            $this->editingCliente->delete();
            $this->clientes = Cliente::all(); // Recarrega a lista de clientes
            $this->showDeleteModal = false;
        }
    }

    public function render()
    {
        return view('clientes.list', [
            'clientes' => $this->clientes,
        ]);
    }
}
