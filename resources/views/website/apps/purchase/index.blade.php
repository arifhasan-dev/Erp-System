@extends('website.master')
@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Purchase</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Purchase</a></li>
                        <li class="breadcrumb-item active">Purchase</li>
                    </ul>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-7">
                                    <h6 class="mb-1 fs-17 fw-medium">Total Purchases</h6>
                                    <div class="icon bg-primary-subtle text-primary rounded size-10 d-flex align-items-center justify-content-center">
                                        <i class="ri-shopping-bag-3-line fs-5"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 font-base">$128,750</h3>
                                <div class="d-flex align-items-start justify-content-between">
                                    <span><span class="text-success fw-medium me-1"><i data-lucide="trending-up" class="size-4 me-1"></i>5.2%</span> vs last month</span>
                                    <a href="#!" class="link link-custom-primary">View more<i data-lucide="arrow-up-right" class="size-4 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-7">
                                    <h6 class="mb-1 fs-17 fw-medium">Total Orders</h6>
                                    <div class="icon bg-warning-subtle text-warning rounded size-10 d-flex align-items-center justify-content-center">
                                        <i class="ri-file-list-3-line fs-5"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 font-base">1,245</h3>
                                <div class="d-flex align-items-start justify-content-between">
                                    <span><span class="text-success fw-medium me-1"><i data-lucide="trending-up" class="size-4 me-1"></i>3.8%</span> vs last month</span>
                                    <a href="#!" class="link link-custom-primary">View more<i data-lucide="arrow-up-right" class="size-4 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-7">
                                    <h6 class="mb-1 fs-17 fw-medium">Pending Orders</h6>
                                    <div class="icon bg-info-subtle text-info rounded size-10 d-flex align-items-center justify-content-center">
                                        <i class="ri-time-line fs-5"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 font-base">78</h3>
                                <div class="d-flex align-items-start justify-content-between">
                                    <span><span class="text-danger fw-medium me-1"><i data-lucide="trending-down" class="size-4 me-1"></i>1.2%</span> vs last month</span>
                                    <a href="#!" class="link link-custom-primary">View more<i data-lucide="arrow-up-right" class="size-4 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-7">
                                    <h6 class="mb-1 fs-17 fw-medium">Returned Items</h6>
                                    <div class="icon bg-danger-subtle text-danger rounded size-10 d-flex align-items-center justify-content-center">
                                        <i class="ri-refresh-line fs-5"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 font-base">34</h3>
                                <div class="d-flex align-items-start justify-content-between">
                                    <span><span class="text-danger fw-medium me-1"><i data-lucide="trending-down" class="size-4 me-1"></i>0.8%</span> vs last month</span>
                                    <a href="#!" class="link link-custom-primary">View more<i data-lucide="arrow-up-right" class="size-4 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-7">
                                    <h6 class="mb-1 fs-17 fw-medium">Total Revenue</h6>
                                    <div class="icon bg-success-subtle text-success rounded size-10 d-flex align-items-center justify-content-center">
                                        <i class="ri-wallet-line fs-5"></i>
                                    </div>
                                </div>
                                <h3 class="mb-3 font-base">$97,450</h3>
                                <div class="d-flex align-items-start justify-content-between">
                                    <span><span class="text-success fw-medium me-1"><i data-lucide="trending-up" class="size-4 me-1"></i>4.5%</span> vs last month</span>
                                    <a href="#!" class="link link-custom-primary">View more<i data-lucide="arrow-up-right" class="size-4 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between mb-5">
                            <div>
                                <h5 class="card-title mb-1">Purchases List</h5>
                                <p class="text-muted">View and manage all purchase records including suppliers and items.</p>
                            </div>
                            <a href="{{route('purchases.create')}}" class="btn btn-primary"><i data-lucide="plus" class="size-4 me-1"></i>Add Purchase</a>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                <div id="filterPaymentStatus" class="w-56"></div>
                                <div id="filterPurchaseStatus" class="w-56"></div>
                                <div class="position-relative flex-shrink-0">
                                    <input type="text" class="form-control ps-10" data-datepicker data-date-format="dd-MM-yyyy" placeholder="Choose date">
                                    <i data-lucide="calendar" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon border" data-bs-toggle="dropdown" aria-expanded="false"><i data-lucide="funnel" class="size-4"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-end p-3 w-80" aria-labelledby="filterDropdownButton">
                                        <h6 class="mb-4">Filter Options</h6>
                                        <form action="#!" id="filterForm">
                                            <div class="mb-3">
                                                <label class="form-label small">Purchase Date</label>
                                                <div class="d-flex gap-2">
                                                    <input type="text" class="form-control" data-datepicker data-date-format="dd-MM-yyyy" placeholder="From date">
                                                    <input type="text" class="form-control" data-datepicker data-date-format="dd-MM-yyyy" placeholder="To date">
                                                </div>
                                            </div>
                                            <label class="mb-3 form-label">Price Range</label>
                                            <div id="slider"></div>
                                            <div class="d-flex align-items-center justify-content-end gap-2 mt-7">
                                                <button type="reset" class="btn-sm btn btn-light h-8 px-4">Reset</button>
                                                <button type="submit" class="btn-sm btn btn-primary h-8 px-4">Apply</button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                <div class="position-relative">
                                    <input type="text" id="lostItemSearch" class="form-control ps-10" placeholder="Search Purchases...">
                                    <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                                </div>
                                <button type="button" class="btn btn-outline-light border flex-shrink-0"><i class="ri-file-pdf-line me-1"></i>Export PDF</button>
                                <button type="button" class="btn btn-outline-light border flex-shrink-0"><i class="ri-file-excel-line me-1"></i>Export Excel</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                <tr class="bg-light border-bottom">
                                    <th class="fw-medium text-muted">SL NO</th>
                                    <th class="fw-medium text-muted">Purchase ID</th>
                                    <th class="fw-medium text-muted">Supplier</th>
                                    <th class="fw-medium text-muted">Purchase Status</th>
                                    <th class="fw-medium text-muted">Purchase Date</th>
                                    <th class="fw-medium text-muted">Total Amount</th>
                                    <th class="fw-medium text-muted">Payment Status</th>
                                    <th class="fw-medium text-muted">Payment Method</th>
                                    <th class="fw-medium text-muted">Actions</th>
                                </tr>
                                </thead>
                                @foreach($purchases as $purchase)
                                <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{$purchase->purchase_no }}
                                    </td>
                                    <td>{{$purchase->supplier->name}}</td>
                                    <td>
                                        {{$purchase->status}}
                                    </td>
                                    <td>
                                        {{$purchase->purchase_date }}
                                    </td>
                                    <td>{{$purchase->total_amount}}</td>
                                    <td>{{$purchase->payment_status}}</td>
                                    <td ><span  class="badge bg-success-subtle text-success border border-success-subtle">{{$purchase->payment_method}}</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{route('purchases.show',$purchase->id)}}" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></a>
                                            <a href="{{route('purchases.edit',$purchase->id)}}" class="btn btn-sub-secondary size-8 btn-icon"><i class="ri-edit-line"></i></a>
                                            <form action="{{route('purchases.destroy',$purchase->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-sub-danger size-8 btn-icon"><i class="ri-delete-bin-line"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row align-items-center g-3 mt-3">
                            <div class="col-md-6">
                                <p class="text-muted text-center text-md-start mb-0">Showing <b class="me-1">1-10</b> of <b class="ms-1">16</b> Results</p>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center justify-content-md-end mb-0 products-pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#"><i data-lucide="chevron-left" class="size-4"></i>Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next<i data-lucide="chevron-right" class="size-4"></i></a></li>
                                    </ul>
                                </nav>
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
                            <h5 class="mb-4 lh-base">Are you sure you want to delete this Purchase?</h5>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                <button type="button" class="btn btn-link text-reset" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
