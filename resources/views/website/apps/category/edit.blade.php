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

                <!-- Add/Edit Category Modal -->
                <div>
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header mb-3">
                                <h6 class="modal-title" id="addCategoryModalLabel"> Edit Category</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('categories.update',$category->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="categoryId">
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="categoryName" placeholder="e.g., Electronics" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoryCode" class="form-label">Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" value="{{$category->code}}" id="categoryCode" placeholder="e.g., ELE-001" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoryStatus" class="form-label">Status</label>
                                        <select class="form-select" id="categoryStatus" name="status">
                                            <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="d-flex gap-2 mt-7">
                                        <button type="submit" class="btn btn-primary w-100">Update Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

