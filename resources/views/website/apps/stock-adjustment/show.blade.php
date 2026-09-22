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
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Stock Adjustment No</th>
                                            <td>{{$stockAdjustment->adjustment_no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Date</th>
                                            <td>{{$stockAdjustment->adjustment_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment type</th>
                                            <td>{{$stockAdjustment->type}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Quantity</th>
                                            <td>{{$stockAdjustment->quantity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Reason </th>
                                            <td>{{$stockAdjustment->reason}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Status</th>
                                            <td>{{$stockAdjustment->status}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Note</th>
                                            <td>{{$stockAdjustment->note}}</td>
                                        </tr>
                                        <tr>
                                            <th>Stock Adjustment Creator</th>
                                            <td>{{$stockAdjustment->creator?->name ?? 'N/A'}}</td>
                                        </tr>

                                        </thead>
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
