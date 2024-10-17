@extends('layouts.app')
@section('content')
    <div class="gap-3 row">
        <div class="d-flex justify-content-between ">
            <h1 class="mb-3 h3">Usuários</h1>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newClientModal">
                Novo Usuário
            </button>
        </div>
        @livewire('data-table')
    </div>
    <!-- Modal -->
        <div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="newClientModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="w-auto modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="newClientModalLabel">Novo Usuário</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @livewire('form-new-user')
                    </div>
                </div>
            </div>
        </div>
@endsection
