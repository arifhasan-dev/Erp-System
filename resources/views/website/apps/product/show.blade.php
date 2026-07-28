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
                                    <th>Product ID</th>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Category</th>
                                    <td>{{$product->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <td>
                                        @if($product->images->isNotEmpty())
                                            <img src="{{ asset('storage/' . $product->images->first()->image) }}"
                                                 alt="{{ $product->name }}"
                                                 width="60"
                                                 height="60"
                                                 class="img-thumbnail">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Selling Price</th>
                                    <td>{{$product->selling_price}}</td>
                                </tr>
                                <tr>
                                    <th>Product Opening Stock</th>
                                    <td>{{$product->opening_stock}}</td>
                                </tr>
                                <tr>
                                    <th>Product Code</th>
                                    <td>{{$product->code}}</td>
                                </tr>
                                <tr>
                                    <th>Product Sku</th>
                                    <td>{{$product->sku}}</td>
                                </tr>
                                <tr>
                                    <th>Product Barcode</th>
                                    <td>{{$product->barcode}}</td>
                                </tr>
                                <tr>
                                    <th>Product Slug</th>
                                    <td>{{$product->slug}}</td>
                                </tr>
                                <tr>
                                    <th>Product Description</th>
                                    <td>{{$product->description}}</td>
                                </tr>
                                <tr>
                                    <th>Product Create </th>
                                    <td>{{$product->created_by}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($product->status)
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

