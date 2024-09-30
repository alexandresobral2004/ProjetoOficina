{{-- @extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tabela de Funcionarios.</h5>
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
                                <th data-ordering="false">Nome</th>
                                <th data-ordering="false">Email</th>
                                <th data-ordering="false">Telefone</th>
                                <th data-ordering="false">CPF</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->fone }}</td>
                                    <td>{{ $employee->cpf }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block d-flex justify-content-center align-items-center ">
                                            <style>
                                                ::marker {
                                                    content: none;
                                                }
                                            </style>
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                {{-- <li><a href="#!" class="dropdown-item"><i
                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li> --}}
{{-- <li><a class="dropdown-item edit-item-btn"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
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
    </div>
@endsection  --}}

{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="table-gridjs"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div> --}}


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="table-gridjs">
                    <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-head">
                            <div class="gridjs-search"><input type="search" placeholder="Type a keyword..."
                                    aria-label="Type a keyword..." class="gridjs-input gridjs-search-input"></div>
                        </div>
                        <div class="gridjs-wrapper" style="height: auto;">
                            <table role="grid" class="gridjs-table" style="height: auto;">
                                <thead class="gridjs-thead">
                                    <tr class="gridjs-tr">
                                        <th data-column-id="id" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 80px;">
                                            <div class="gridjs-th-content">ID</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 150px;">
                                            <div class="gridjs-th-content">Name</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 220px;">
                                            <div class="gridjs-th-content">Email</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="position" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 250px;">
                                            <div class="gridjs-th-content">Position</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 180px;">
                                            <div class="gridjs-th-content">Company</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="country" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 180px;">
                                            <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                        <th data-column-id="actions" class="gridjs-th gridjs-th-sort" tabindex="0"
                                            style="width: 150px;">
                                            <div class="gridjs-th-content">Actions</div><button tabindex="-1"
                                                aria-label="Sort column ascending" title="Sort column ascending"
                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="gridjs-tbody">
                                    <tr class="gridjs-tr">
                                        <td data-column-id="id" class="gridjs-td"><span><span
                                                    class="fw-semibold">06</span></span></td>
                                        <td data-column-id="name" class="gridjs-td">Traci</td>
                                        <td data-column-id="email" class="gridjs-td"><span><a
                                                    href="">traci@example.com</a></span></td>
                                        <td data-column-id="position" class="gridjs-td">Corporate Identity Director</td>
                                        <td data-column-id="company" class="gridjs-td">Koelpin - Goldner</td>
                                        <td data-column-id="country" class="gridjs-td">Vanuatu</td>
                                        <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                    class="text-reset text-decoration-underline">Details</a></span>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="id" class="gridjs-td"><span><span
                                                    class="fw-semibold">07</span></span></td>
                                        <td data-column-id="name" class="gridjs-td">Kerry</td>
                                        <td data-column-id="email" class="gridjs-td"><span><a
                                                    href="">kerry@example.com</a></span></td>
                                        <td data-column-id="position" class="gridjs-td">Lead Applications Associate
                                        </td>
                                        <td data-column-id="company" class="gridjs-td">Feeney, Langworth and Tremblay
                                        </td>
                                        <td data-column-id="country" class="gridjs-td">Niger</td>
                                        <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                    class="text-reset text-decoration-underline">Details</a></span>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="id" class="gridjs-td"><span><span
                                                    class="fw-semibold">08</span></span></td>
                                        <td data-column-id="name" class="gridjs-td">Patsy</td>
                                        <td data-column-id="email" class="gridjs-td"><span><a
                                                    href="">patsy@example.com</a></span></td>
                                        <td data-column-id="position" class="gridjs-td">Dynamic Assurance Director
                                        </td>
                                        <td data-column-id="company" class="gridjs-td">Streich Group</td>
                                        <td data-column-id="country" class="gridjs-td">Niue</td>
                                        <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                    class="text-reset text-decoration-underline">Details</a></span>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="id" class="gridjs-td"><span><span
                                                    class="fw-semibold">09</span></span></td>
                                        <td data-column-id="name" class="gridjs-td">Cathy</td>
                                        <td data-column-id="email" class="gridjs-td"><span><a
                                                    href="">cathy@example.com</a></span></td>
                                        <td data-column-id="position" class="gridjs-td">Customer Data Director</td>
                                        <td data-column-id="company" class="gridjs-td">Ebert, Schamberger and Johnston
                                        </td>
                                        <td data-column-id="country" class="gridjs-td">Mexico</td>
                                        <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                    class="text-reset text-decoration-underline">Details</a></span>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="id" class="gridjs-td"><span><span
                                                    class="fw-semibold">10</span></span></td>
                                        <td data-column-id="name" class="gridjs-td">Tyrone</td>
                                        <td data-column-id="email" class="gridjs-td"><span><a
                                                    href="">tyrone@example.com</a></span></td>
                                        <td data-column-id="position" class="gridjs-td">Senior Response Liaison</td>
                                        <td data-column-id="company" class="gridjs-td">Raynor, Rolfson and Daugherty
                                        </td>
                                        <td data-column-id="country" class="gridjs-td">Qatar</td>
                                        <td data-column-id="actions" class="gridjs-td"><span><a href="#"
                                                    class="text-reset text-decoration-underline">Details</a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="gridjs-footer">
                            <div class="gridjs-pagination">
                                <div role="status" aria-live="polite" class="gridjs-summary" title="Page 2 of 2">
                                    Showing <b>6</b> to <b>10</b> of <b>10</b> results</div>
                                <div class="gridjs-pages"><button tabindex="0" role="button" title="Previous"
                                        aria-label="Previous" class="">Previous</button><button tabindex="0"
                                        role="button" class="" title="Page 1"
                                        aria-label="Page 1">1</button><button tabindex="0" role="button"
                                        class="gridjs-currentPage" title="Page 2"
                                        aria-label="Page 2">2</button><button tabindex="0" role="button"
                                        title="Next" aria-label="Next" class="" disabled="">Next</button>
                                </div>
                            </div>
                        </div>
                        <div id="gridjs-temp" class="gridjs-temp"></div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
