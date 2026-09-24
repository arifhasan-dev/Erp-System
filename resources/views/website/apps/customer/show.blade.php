@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Customers List</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Customers</a></li>
                        <li class="breadcrumb-item active">Customers List</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">Customers List</h5>
                            <p class="text-muted">total customers: <span class="text-body fw-medium">3,482</span></p>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div class="position-relative">
                                <input type="text" id="lostItemSearch" class="form-control ps-10" placeholder="Search Customer...">
                                <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer No</th>
                                        <td>{{$customer->customer_code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Name</th>
                                        <td>{{$customer->name}}</td>
                                    </tr>                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$customer->phone}}</td>
                                    </tr>                                    <tr>
                                        <th>Email</th>
                                        <td>{{$customer->email}}</td>
                                    </tr>                                    <tr>
                                        <th>Address</th>
                                        <td>{{$customer->address}}</td>
                                    </tr>                                    <tr>
                                        <th>Opening Balance</th>
                                        <td>{{$customer->opening_balance}}</td>
                                    </tr>                                    <tr>
                                        <th>Credit Limit</th>
                                        <td>{{$customer->credit_limit}}</td>
                                    </tr>                                    <tr>
                                        <th>Note</th>
                                        <td>{{$customer->note}}</td>
                                    </tr>                                    <tr>
                                        <th>Status</th>
                                        <td>{{$customer->status}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row align-items-center g-3 mt-3">
                            <div class="col-md-6">
                                <p class="text-muted text-center text-md-start mb-0">Showing <b class="me-1">1-10</b> of <b class="ms-1">23</b> Results</p>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center justify-content-md-end mb-0 products-pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#"><i data-lucide="chevron-left" class="size-4"></i>Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next<i data-lucide="chevron-right" class="size-4"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
