@extends('website.master')
@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Suppliers List</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Suppliers</a></li>
                        <li class="breadcrumb-item active">Suppliers List</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
                        <div class="position-relative">
                            <input type="text" id="lostItemSearch" class="form-control ps-10" placeholder="Search Suppliers...">
                            <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div id="spplierStatus" class="w-44"></div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-outline-light border" data-bs-toggle="dropdown" aria-expanded="false"><i data-lucide="arrow-down-to-line" class="size-4 me-1"></i>Export As</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#!" id="exportPrint">Print PDF</a></li>
                                    <li><a class="dropdown-item" href="#!" id="exportJSON">Export CSV</a></li>
                                    <li><a class="dropdown-item" href="#!" id="exportXML">Export XML</a></li>
                                </ul>
                            </div>
                            <a href="{{route('suppliers.create')}}" class="btn btn-primary"><i data-lucide="plus" class="size-4 me-1"></i>Add Supplier</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-striped-even text-nowrap align-middle mb-0">
                                <thead>
                                <tr class="bg-light border-bottom">
                                    <th class="fw-medium text-muted">Supplier ID</th>
                                    <th class="fw-medium text-muted">Supplier Image</th>
                                    <th class="fw-medium text-muted">Supplier</th>
                                    <th class="fw-medium text-muted">Company Name</th>
                                    <th class="fw-medium text-muted">Total Purchase</th>
                                    <th class="fw-medium text-muted">Contact</th>
                                    <th class="fw-medium text-muted">Email</th>
                                    <th class="fw-medium text-muted">Status</th>
                                    <th class="fw-medium text-muted">Country</th>
                                    <th class="fw-medium text-muted">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{$supplier->code}}</td>
                                    <td>
                                        @if($supplier->image)
                                            <img src="{{asset('Storage/'.$supplier->image)}}" alt="" height="70px">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{$supplier->name}}</td>
                                    <td>{{$supplier->company_name}}</td>
                                    <td>00.00</td>
                                    <td>{{$supplier->phone}}</td>
                                    <td>{{$supplier->email}}</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success border border-success-subtle">Active</span>
                                    </td>
                                    <td>{{$supplier->country}}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{route('suppliers.show',$supplier->id)}}" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></a>
                                            <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-sub-secondary size-8 btn-icon"><i class="ri-edit-line"></i></a>
                                            <form action="{{route('suppliers.destroy',$supplier->id)}}" method="post">
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

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xs">
                        <div class="modal-content p-7 text-center">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="size-14 bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center size-16">
                                    <i class="ri-delete-bin-line text-danger fs-2xl"></i>
                                </div>
                            </div>
                            <h5 class="mb-4 lh-base">Are you sure you want to delete this Supplier?</h5>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                <button type="button" class="btn btn-link text-reset" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
