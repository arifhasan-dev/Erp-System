@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
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
                            <a href="{{route('sales.create')}}" class="btn btn-primary"><i data-lucide="plus" class="size-4 me-1"></i>Add Sales</a>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
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
                                    <th class="fw-medium text-muted">Sales ID</th>
                                    <th class="fw-medium text-muted">Customer Name</th>
                                    <th class="fw-medium text-muted">Sale Date</th>
                                    <th class="fw-medium text-muted">Grand Total</th>
                                    <th class="fw-medium text-muted">Paid Amount</th>
                                    <th class="fw-medium text-muted">Due Amount</th>
                                    <th class="fw-medium text-muted">Payment Status</th>
                                    <th class="fw-medium text-muted">Status</th>
                                    <th class="fw-medium text-muted">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sales as $sale)
                                    <tr>
                                    <td>{{$sale->sale_no}}</td>
                                    <td>{{$sale->customer->name}}</td>
                                    <td>{{$sale->sale_date}}</td>
                                    <td>{{$sale->grand_total}}</td>
                                    <td>{{$sale->paid_amount}}</td>
                                    <td>{{$sale->due_amount}}</td>
                                    <td><span class="badge bg-success-subtle text-success border border-success-subtle">{{$sale->payment_status}}</span></td>
                                    <td><span class="badge bg-success-subtle text-info border border-success-subtle">{{$sale->status}}</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{route('sales.show',$sale->id)}}" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></a>
                                            <a href="{{route('sales.edit',$sale->id)}}" class="btn btn-sub-secondary size-8 btn-icon"><i class="ri-edit-line"></i></a>
                                            <form action="{{route('sales.destroy',$sale->id)}}" method="post">
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
@endsection
