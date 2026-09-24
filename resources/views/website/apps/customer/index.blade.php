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
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-5">
                    <div class="col">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between gap-2 align-items-center mb-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="size-10 avatar bg-primary text-white rounded-circle">
                                        <div data-lucide="users" class="size-5"></div>
                                    </div>
                                    <h6 class="fs-16 mb-0 fw-medium">Total Customers</h6>
                                </div>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown"><i class="ri-more-2-fill fs-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-eye-line"></i> View</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-pencil-line"></i> Edit</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center text-danger"><i class="ri-delete-bin-5-line"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <h4 class="mb-0 font-base">3,482</h4>
                                <p class="mb-0">
                                    <span class="text-success fw-medium"><i data-lucide="arrow-big-up-dash" class="size-4 me-1"></i>4.2%</span>
                                    <span class="text-muted ms-1">vs last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between gap-2 align-items-center mb-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="size-10 avatar bg-success text-white rounded-circle">
                                        <div data-lucide="user-check" class="size-5"></div>
                                    </div>
                                    <h6 class="fs-16 mb-0 fw-medium">Active Customers</h6>
                                </div>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown"><i class="ri-more-2-fill fs-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-eye-line"></i> View</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-pencil-line"></i> Edit</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center text-danger"><i class="ri-delete-bin-5-line"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <h4 class="mb-0 font-base">2,916</h4>
                                <p class="mb-0">
                                    <span class="text-success fw-medium"><i data-lucide="arrow-big-up-dash" class="size-4 me-1"></i>83.7%</span>
                                    <span class="text-muted ms-1">engagement</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between gap-2 align-items-center mb-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="size-10 avatar bg-info text-white rounded-circle">
                                        <div data-lucide="crown" class="size-5"></div>
                                    </div>
                                    <h6 class="fs-16 mb-0 fw-medium">VIP Customers</h6>
                                </div>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown"><i class="ri-more-2-fill fs-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-eye-line"></i> View</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-pencil-line"></i> Edit</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center text-danger"><i class="ri-delete-bin-5-line"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <h4 class="mb-0 font-base">428</h4>
                                <p class="mb-0">
                                    <span class="text-success fw-medium"><i data-lucide="arrow-big-up-dash" class="size-4 me-1"></i>72.6%</span>
                                    <span class="text-muted ms-1">high value</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between gap-2 align-items-center mb-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="size-10 avatar bg-warning text-white rounded-circle">
                                        <div data-lucide="user-plus" class="size-5"></div>
                                    </div>
                                    <h6 class="fs-16 mb-0 fw-medium">New Customers</h6>
                                </div>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown"><i class="ri-more-2-fill fs-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-eye-line"></i> View</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-pencil-line"></i> Edit</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center text-danger"><i class="ri-delete-bin-5-line"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <h4 class="mb-0 font-base">312</h4>
                                <p class="mb-0">
                                    <span class="text-success fw-medium"><i data-lucide="arrow-big-up-dash" class="size-4 me-1"></i>6.1%</span>
                                    <span class="text-muted ms-1">this month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between gap-2 align-items-center mb-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="size-10 avatar bg-danger text-white rounded-circle">
                                        <div data-lucide="user-x" class="size-5"></div>
                                    </div>
                                    <h6 class="fs-16 mb-0 fw-medium">Inactive Customers</h6>
                                </div>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown"><i class="ri-more-2-fill fs-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-eye-line"></i> View</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center"><i class="ri-pencil-line"></i> Edit</a></li>
                                        <li><a href="#!" class="dropdown-item d-flex gap-3 align-items-center text-danger"><i class="ri-delete-bin-5-line"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-5">
                                <h4 class="mb-0 font-base">566</h4>
                                <p class="mb-0">
                                    <span class="text-danger fw-medium"><i data-lucide="arrow-big-down-dash" class="size-4 me-1"></i>16.3%</span>
                                    <span class="text-muted ms-1">need follow-up</span>
                                </p>
                            </div>
                        </div>
                    </div>
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
                            <a href="{{route('customers.create')}}" class="btn btn-primary"><i data-lucide="plus" class="size-4 me-1"></i>Add Customer</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-borderless text-nowrap align-middle mb-0">
                                <thead>
                                <tr class="bg-light border-bottom">
                                    <th class="fw-medium text-muted">Customer ID</th>
                                    <th class="fw-medium text-muted">Customer Name</th>
                                    <th class="fw-medium text-muted">Phone</th>
                                    <th class="fw-medium text-muted">Email</th>
                                    <th class="fw-medium text-muted">Address</th>
                                    <th class="fw-medium text-muted">Opening Balance</th>
                                    <th class="fw-medium text-muted">Credit Limit</th>
                                    <th class="fw-medium text-muted">Note</th>
                                    <th class="fw-medium text-muted">Status</th>
                                    <th class="fw-medium text-muted">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->customer_code}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->opening_balance}}</td>
                                        <td>{{$customer->credit_limit}}</td>
                                        <td>{{$customer->note}}</td>
                                        <td>
                                            @if($customer->status == 1)
                                                <span class="badge bg-success-subtle text-success">Active</span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{route('customers.show',$customer->id)}}" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></a>
                                                <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-sub-secondary size-8 btn-icon"><i class="ri-edit-line"></i></a>
                                                <form action="{{route('customers.destroy',$customer->id)}}" method="post">
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
