@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Units</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Units</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Units</h5>
                                <div class="d-flex gap-3 flex-wrap ms-auto flex-md-nowrap">
                                    <div class="flex-shrink-0">
                                        <label for="searchProductInput" class="form-label d-none">Search</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-9" id="searchProductInput" placeholder="Search for...">
                                            <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                        </div>
                                    </div>
                                    <a href="{{route('units.create')}}" class="btn btn-primary d-flex align-items-center gap-1 flex-shrink-0"><i data-lucide="plus" class="size-4"></i> Add Units</a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-card table-responsive">
                                    <table class="table table-borderless align-middle text-nowrap mb-0">
                                        <thead>
                                        <tr class="bg-light border-bottom">
                                            <th>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" aria-label="checkbox" id="checAllData">
                                                    <label class="form-check-label d-none" for="checAllData">Check All Data</label>
                                                </div>
                                            </th>
                                            <th class="fw-medium text-muted sortable" data-column="name">Name</th>
                                            <th class="fw-medium text-muted sortable" data-column="name">Short Name</th>
                                            <th class="fw-medium text-muted sortable" data-column="code">Code</th>
                                            <th class="fw-medium text-muted sortable" data-column="type">Status</th>
                                            <th class="fw-medium text-muted">Action</th>
                                        </tr>
                                        </thead>
                                        @foreach($units as $unit)
                                        <tbody >
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$unit->name}}</td>
                                                <td>{{$unit->short_name}}</td>
                                                <td>{{$unit->code}}</td>
                                                <td>
                                                    @if($unit->status)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-warning">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('units.edit',$unit->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{route('units.destroy',$unit->id)}}" method="post" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-indigo btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="row align-items-center g-3 mt-2">
                                    <div class="col-md-6">
                                        <p class="text-muted text-center text-md-start mb-0" id="paginationInfo">
                                            Showing <b class="me-1">1-0</b> of <b class="ms-1">0</b> Results
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center justify-content-md-end mb-0" id="pagination">
                                                <!-- Pagination will be dynamically added here -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xs">
                        <div class="modal-content p-7 text-center">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="size-14 bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center size-16">
                                    <i class="ri-delete-bin-line text-danger fs-2xl"></i>
                                </div>
                            </div>
                            <h5 class="mb-4 lh-base">Are you sure you want to delete this Unit?</h5>
                            <input type="hidden" id="deleteUnitId">
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                <button type="button" class="btn btn-link text-reset" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
