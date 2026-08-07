@extends('website.master')
@section('body')
    <!-- ------- -->
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Products List</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Products List</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap align-items-center gap-5">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 card-title">Products List</h6>
                            </div>
                            <div class="d-flex flex-wrap gap-2 flex-shrink-0">
                                <div class="dropdown flex-shrink-0">
                                    <button class="btn btn-light d-flex align-items-center" type="button" id="exportDropdownButton" data-bs-toggle="dropdown" aria-expanded="false" title="dropdown-button">
                                        <i data-lucide="download" class="size-4 me-1"></i> Export
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="exportDropdownButton">
                                        <li class="dropdown-item">
                                            <i data-lucide="file-text" class="size-4 me-1 align-middle"></i> Export to Excel
                                        </li>
                                        <li class="dropdown-item">
                                            <i data-lucide="file" class="size-4 me-1 align-middle"></i> Export to CSV
                                        </li>
                                        <li class="dropdown-item">
                                            <i data-lucide="file-output" class="size-4 me-1 align-middle"></i> Export to PDF
                                        </li>
                                        <li class="dropdown-item">
                                            <i data-lucide="printer" class="size-4 me-1 align-middle"></i> Print
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary d-flex align-items-center gap-1" href="{{route('products.create')}}"><i data-lucide="plus" class="size-4"></i> Add Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <label for="searchProductInput" class="form-label d-none">Search</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-9" id="searchProductInput" placeholder="Search for...">
                                    <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap flex-md-nowrap gap-2">
                                <button type="button" class="btn btn-danger btn-icon flex-shrink-0 d-none trash-button"><i data-lucide="trash-2" class="size-5"></i></button>
                                <div id="stockSelect" class="min-w-40"></div>
                                <div id="priceSelect" class="min-w-36"></div>
                                <div class="dropdown flex-shrink-0">
                                    <button class="btn btn-light d-flex align-items-center" type="button" id="filterDropdownButton" data-bs-toggle="dropdown" aria-expanded="false" title="dropdown-button">
                                        <i data-lucide="filter" class="size-4 me-1"></i> Filters
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-3 w-64" aria-labelledby="filterDropdownButton">
                                        <h6 class="mb-4">Filter Options</h6>
                                        <form action="#!" id="filterForm">
                                            <h6 class="mb-2 fs-sm">Status</h6>
                                            <div class="d-flex gap-4 align-items-center mb-4">
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input mt-0" type="checkbox" id="publishedStatus">
                                                    <label class="form-check-label" for="publishedStatus">
                                                        Published
                                                    </label>
                                                </div>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input mt-0" type="checkbox" id="inactiveStatus">
                                                    <label class="form-check-label" for="inactiveStatus">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                            <label class="mb-3 form-label">Price Range</label>
                                            <div id="slider"></div>
                                            <div class="d-flex align-items-center justify-content-end gap-2 mt-5">
                                                <button type="reset" class="btn-sm btn btn-light">Reset</button>
                                                <button type="submit" class="btn-sm btn btn-primary">Apply</button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-borderless mb-0 text-nowrap align-middle">
                                <thead>
                                <tr class="bg-light border-bottom">
                                    <th scope="col" class="text-muted fw-medium" data-sort="id">Product ID</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="name">Product</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="image">Image</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="category">Category</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="price">Price</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="quantity">QTY</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="brand">Brand</th>
                                    <th scope="col" class="text-muted fw-medium" data-sort="status">status</th>
                                    <th scope="col" class="text-muted fw-medium">Action</th>
                                </tr>
                                </thead>
                                @foreach($products as $product)
                                <tbody>
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
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
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->selling_price}}</td>
                                        <td>{{$product->opening_stock}}</td>
                                        <td>{{$product->brand->name}}</td>
                                        <td>
                                            @if($product->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">

                                                <!-- View -->
                                                <a href="{{ route('products.show', $product->id) }}"
                                                   class="btn btn-sm btn-info"
                                                   title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a>

                                                <!-- Edit -->
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                   class="btn btn-sm btn-warning"
                                                   title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <!-- Delete -->
                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this product?')"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger"
                                                            title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
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
                                <p class="text-muted text-center text-md-start mb-0">Showing <b class="me-1">1-10</b>of<b class="ms-1">10</b> Results</p>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center justify-content-md-end mb-0 products-pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#!"><i data-lucide="chevron-left" class="size-4"></i> Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next <i data-lucide="chevron-right" class="size-4"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xs mx-auto">
                        <div class="modal-content p-7 text-center">
                            <div class="size-14 bg-danger-subtle rounded-circle avatar mx-auto mb-4">
                                <i data-lucide="trash-2" class="size-6 text-danger"></i>
                            </div>
                            <h5 class="mb-4 lh-base">Are you sure you want to delete this Product?</h5>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <button type="button" class="btn btn-danger delete-btn" data-bs-dismiss="modal">Delete</button>
                                <button type="button" class="btn btn-active-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
