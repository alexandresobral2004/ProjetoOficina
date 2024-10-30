@extends('layouts.app')

@section('content')
    <div class="gap-3 row">
        <div>
            <div class="mb-3 d-flex justify-content-between">
                <h1 class="mb-3 h3">Clientes</h1>
                
            </div>

            @livewire('Clientes.list-clientes')
        </div>
    <!-- Modal -->
    <div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="newClientModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="w-auto modal-content" >
                <div class="pb-3 modal-header" style="background-color: #b1b5b9">
                    <h4  class="modal-title" id="newClientModalLabel">Novo Cliente</h4>
                    <button style="" type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('clientes.new')
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        
    </script>
@endsection

