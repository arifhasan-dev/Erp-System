@extends('website.master')
@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Categories</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                <div class="flex-shrink-0">
                                    <label for="searchProductInput" class="form-label d-none">Search</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control ps-9" id="searchProductInput" placeholder="Search for...">
                                        <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 flex-wrap ms-auto flex-md-nowrap">
                                    <div id="Categories" class="min-w-44"></div>
                                    <div id="Status"></div>
                                    @can('category.create')
                                    <button type="button" class="btn btn-primary d-flex align-items-center gap-1 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#addCategoryModal" id="addCategoriesBtn"><i data-lucide="plus" class="size-4"></i> Add Categories</button>
                                    @endcan
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-card table-responsive">
                                    <table class="table align-middle text-nowrap mb-0">
                                        <thead>
                                        <tr class="bg-light border-bottom">
                                            <th>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" aria-label="checkbox" id="checAllData">
                                                    <label class="form-check-label d-none" for="checAllData">Check All Data</label>
                                                </div>
                                            </th>
                                            <th class="fw-medium text-muted sortable" data-column="category">Category</th>
                                            <th class="fw-medium text-muted sortable" data-column="code">Code</th>
                                            <th class="fw-medium text-muted sortable" data-column="status">Status</th>
                                            <th class="fw-medium text-muted sortable" data-column="created">Created</th>
                                            <th class="fw-medium text-muted">Action</th>
                                        </tr>
                                        </thead>
                                        @foreach($categories as $category)
                                        <tbody id="variantTableBody">
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" aria-label="checkbox" id="checAllData">
                                                    <label class="form-check-label d-none" for="checAllData">Check All Data</label>
                                                </div>
                                            </td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->code}}</td>
                                            <td class="badge bg-success fs-10">{{$category->status == 1 ? 'Active' : 'Inactive'}}</td>
                                            <td>{{$category->created_at}}</td>
                                            @canany(['category.edit','category.delete'])
                                            <td>
                                                @can('category.edit')
                                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                @endcan
                                                @can('category.delete')
                                                <form action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                                @endcan
                                            </td>
                                            @endcanany
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="row align-items-center g-3 mt-2">
                                    <div class="col-md-6">
                                        <p class="text-muted text-center text-md-start mb-0" id="paginationInfo">
                                            Showing <b class="me-1">1-0</b> of <b class="ms-1">0</b> Results
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center justify-content-md-end mb-0" id="pagination">
                                                <!-- Pagination will be dynamically added here -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add/Edit Category Modal -->
                @can('category.create')
                <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="addCategoryModalLabel">Add New Category</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="categoryForm" action="{{route('categories.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" id="categoryId">
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="categoryName" placeholder="e.g., Electronics" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoryCode" class="form-label">Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" id="categoryCode" placeholder="e.g., ELE-001" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoryStatus" class="form-label">Status</label>
                                        <select class="form-select" id="categoryStatus" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>

                                        <div id="categoryStatus"></div>
                                    </div>

                                    <div class="d-flex gap-2 mt-7">
                                        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary w-100" id="saveCategoryBtn" form="categoryForm">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endcan

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xs">
                        <div class="modal-content p-7 text-center">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="size-14 bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center size-16">
                                    <i class="ri-delete-bin-line text-danger fs-2xl"></i>
                                </div>
                            </div>
                            <h5 class="mb-4 lh-base">Are you sure you want to delete this Category?</h5>
                            <input type="hidden" id="deleteCategoryId">
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                <button type="button" class="btn btn-link text-reset" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

