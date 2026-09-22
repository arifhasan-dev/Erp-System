@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Stock Adjustment</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Inventory</a></li>
                        <li class="breadcrumb-item active">Stock Adjustment</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between mb-4">
                                    <h5 class="card-title mb-0">Stock Adjustments</h5>
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <div class="dropdown flex-shrink-0">
                                            <button class="btn btn-light d-flex align-items-center" type="button" id="exportDropdownButton" data-bs-toggle="dropdown">
                                                <i data-lucide="download" class="size-4 me-1"></i> Export
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li class="dropdown-item"><i data-lucide="file-text" class="size-4 me-1"></i> Export to Excel</li>
                                                <li class="dropdown-item"><i data-lucide="file" class="size-4 me-1"></i> Export to CSV</li>
                                                <li class="dropdown-item"><i data-lucide="file-output" class="size-4 me-1"></i> Export to PDF</li>
                                                <li class="dropdown-item"><i data-lucide="printer" class="size-4 me-1"></i> Print</li>
                                            </ul>
                                        </div>
                                        <a href="{{route('stock-adjustments.create')}}" class="btn btn-primary">Add Adjustment</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-9" id="searchProductInput" placeholder="Search for...">
                                            <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap flex-md-nowrap">
                                        <div class="position-relative min-w-52">
                                            <input type="text" class="form-control ps-9" id="adjustmentDateFilter" placeholder="Adjustment date" readonly>
                                            <i data-lucide="calendar" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                        </div>
                                        <div id="typeFilter" class="min-w-52"></div>
                                        <div id="warehouseFilter" class="min-w-52"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-card table-responsive">
                                    <table class="table table-borderless align-middle text-nowrap mb-0">
                                        <thead>
                                        <tr class="bg-light border-bottom">
                                            <th class="fw-medium text-muted sortable">Adjustment No</th>
                                            <th class="fw-medium text-muted sortable">Date</th>
                                            <th class="fw-medium text-muted sortable">Product</th>
                                            <th class="fw-medium text-muted sortable">Type</th>
                                            <th class="fw-medium text-muted sortable">Quantity</th>
                                            <th class="fw-medium text-muted sortable">Reason</th>
                                            <th class="fw-medium text-muted sortable">Status</th>
                                            <th class="fw-medium text-muted sortable">Create By</th>
                                            <th class="fw-medium text-muted">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($adjustments as $adjustment)
                                                <tr>
                                                    <td>{{$adjustment->adjustment_no}}</td>
                                                    <td>{{$adjustment->adjustment_date}}</td>
                                                    <td>{{$adjustment->product->name}}</td>
                                                    <td>{{$adjustment->type}}</td>
                                                    <td>{{$adjustment->quantity}}</td>
                                                    <td>{{$adjustment->reason}}</td>
                                                    <td>{{$adjustment->status}}</td>
                                                    <td>{{$adjustment->creator?->name }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{route('stock-adjustments.show',$adjustment->id)}}" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></a>
                                                            <a href="{{route('stock-adjustments.edit',$adjustment->id)}}" class="btn btn-sub-secondary size-8 btn-icon"><i class="ri-edit-line"></i></a>
                                                            <form action="{{route('stock-adjustments.destroy',$adjustment->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sub-danger size-8 btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row align-items-center g-3 mt-2">
                                    <div class="col-md-6">
                                        <p class="text-muted text-center text-md-start mb-0" id="paginationInfo">Showing <b class="me-1">1-0</b> of <b class="ms-1">0</b> Results</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav>
                                            <ul class="pagination justify-content-center justify-content-md-end mb-0" id="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
