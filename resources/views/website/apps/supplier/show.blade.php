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
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Supplier Id</th>
                                    <td>{{$supplier->id}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Name</th>
                                    <td>{{$supplier->name}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Email</th>
                                    <td>{{$supplier->email}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Image</th>
                                    <td><img src="{{asset('Storage/' . $supplier->image)}}" alt="" height="50px"></td>
                                </tr>
                                <tr>
                                    <th>Supplier Phone</th>
                                    <td>{{$supplier->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Country</th>
                                    <td>{{$supplier->country}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier City</th>
                                    <td>{{$supplier->city}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Address</th>
                                    <td>{{$supplier->address}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Term</th>
                                    <td>{{$supplier->payment_term}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Currency</th>
                                    <td>{{$supplier->currency}}</td>
                                </tr>
                                <tr>
                                    <th>Company Image</th>
                                    <td><img src="{{asset('Storage/' . $supplier->company_image)}}" alt="" height="50px"></td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td>{{ $supplier->company_name }}</td>
                                </tr>

                                <tr>
                                    <th>Company Email</th>
                                    <td>{{ $supplier->company_email ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <th>Company Phone</th>
                                    <td>{{ $supplier->company_phone ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <th>Company Website</th>
                                    <td>
                                        @if($supplier->company_website)
                                            <a href="{{ $supplier->company_website }}" target="_blank">
                                                {{ $supplier->company_website }}
                                            </a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Company Address</th>
                                    <td>{{ $supplier->company_address ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <th>Tax / VAT Number</th>
                                    <td>{{ $supplier->tax_number ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <th>Industry Type</th>
                                    <td>{{ $supplier->industry_type ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($supplier->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>

                                </thead>
                            </table>
                        </div>
                    </div>
                </div>


@endsection
