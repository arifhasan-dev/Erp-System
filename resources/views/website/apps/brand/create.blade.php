@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Brands</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Brands</li>
                    </ul>
                </div>
                <div>
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="h-24 rounded-top-2 pattern-bg"></div>
                            <div class="modal-body">
                                <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="avatar border text-muted mx-auto bg-body-secondary size-24 rounded p-3 mt-n20 cursor-pointer" for="imageInput">
                                                <i class="ri-upload-cloud-2-line fs-2xl"></i>
                                                <input type="file" name="image" id="imageInput" class="d-none">
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <label for="brandName" class="form-label">Brand Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Brand Name" id="brandName" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="brandCode" class="form-label">Brand Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="code" placeholder="Enter Brand Code" id="brandCode" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control">
                                                <option value="">--Select Category --</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-select">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 mt-7">
                                        <a href="{{route('brands.index')}}" class="btn btn-light w-100">Close</a>
                                        <button type="submit" class="btn btn-primary w-100" id="saveBrandBtn">Add Brand</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
