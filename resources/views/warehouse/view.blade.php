@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3>Detalhes do Produto</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">SKU</th>
                <td>{{ $warehouse->cod }}</td>
              </tr>
              <tr>
                <th scope="row">Peça</th>
                <td>{{ $warehouse->nome_peca }}</td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="text-center card-footer">
          <a href="{{ route('warehouse.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
