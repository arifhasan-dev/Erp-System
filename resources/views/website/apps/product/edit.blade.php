@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Add Products</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Add Products</li>
                    </ul>
                </div>
                <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-7 col-xxl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="productName" class="form-label fw-medium">Product Name</label>
                                            <input type="text" id="productName" value="{{$product->name}}" name="name" class="form-control" placeholder="Enter product name" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="productDescription" class="form-label fw-medium">Description</label>
                                            <textarea id="productDescription" class="form-control" name="description" rows="4" placeholder="Enter product description" required>{{$product->description}}</textarea>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="categorySelect" class="form-label fw-medium">Category</label>
                                            <select name="category_id" id="" class="form-select" required>
                                                <option value="">--Select Category --</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}"@selected(old('category_id',$product->category_id) == $category->id)>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="brand_id" class="form-label fw-medium">Brand</label>

                                            <select name="brand_id" id="brand_id" class="form-select" required>
                                                <option value="">Select Brand</option>

                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}" @selected(old('brand_id',$product->brand_id) == $brand->id)>
                                                        {{ $brand->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label class="form-label">Unit</label>

                                            <select name="unit_id" class="form-select">
                                                <option value="">Select Unit</option>

                                                @foreach($units as $unit)
                                                    <option value="{{ $unit->id }}" @selected(old('unit_id',$product->unit_id) == $unit->id)>
                                                        {{ $unit->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="supplier_id" class="form-label fw-medium">
                                                Supplier
                                            </label>

                                            <select name="supplier_id" id="supplier_id" class="form-select">
                                                <option value="">-- Select Supplier --</option>

                                                @foreach($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}"@selected(old('supplier_id',$product->supplier_id) == $supplier->id)>
                                                        {{ $supplier->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="code" class="form-label fw-medium">
                                                Product Code
                                            </label>

                                            <input
                                                type="text"
                                                id="code"
                                                name="code"
                                                class="form-control"
                                                value="{{$product->code}}"
                                                placeholder="e.g. PRD-000001">
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="sku" class="form-label fw-medium">
                                                SKU
                                            </label>

                                            <input
                                                type="text"
                                                id="sku"
                                                name="sku"
                                                class="form-control"
                                                value="{{$product->sku}}"  placeholder="e.g. SKU-000001">
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="barcode" class="form-label fw-medium">
                                                Barcode
                                            </label>

                                            <input
                                                type="text"
                                                id="barcode"
                                                name="barcode"
                                                class="form-control"
                                                value="{{$product->barcode}}"
                                                placeholder="e.g. 8901234567890">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Pricing & Stock</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4">
                                        <div class="col-md-6 mb-3">
                                            <label for="purchase_price" class="form-label">
                                                Purchase Price <span class="text-danger">*</span>
                                            </label>
                                            <input type="number"
                                                   class="form-control" id="purchase_price" name="purchase_price" step="0.01"
                                                   min="0" value="{{$product->purchase_price}}" placeholder="Enter purchase price" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="selling_price" class="form-label">
                                                Selling Price <span class="text-danger">*</span>
                                            </label>
                                            <input type="number"
                                                   class="form-control"
                                                   id="selling_price"
                                                   name="selling_price"
                                                   value="{{$product->selling_price}}"
                                                   step="0.01"
                                                   min="0"
                                                   placeholder="Enter selling price"
                                                   required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="opening_stock" class="form-label">
                                                Opening Stock <span class="text-danger">*</span>
                                            </label>
                                            <input type="number"
                                                   class="form-control"
                                                   id="opening_stock"
                                                   name="opening_stock"
                                                   value="{{$product->opening_stock}}"
                                                   min="0"
                                                   placeholder="Enter opening stock"
                                                   required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="minimum_stock" class="form-label">
                                                Minimum Stock <span class="text-danger">*</span>
                                            </label>
                                            <input type="number"
                                                   class="form-control"
                                                   id="minimum_stock"
                                                   name="minimum_stock"
                                                   value="{{$product->minimum_stock}}"
                                                   min="0"
                                                   placeholder="Enter minimum stock"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Advanced Product Settings</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4">
                                        <div class="col-md-12 mb-3">
                                            <label for="status" class="form-label">
                                                Status <span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select"
                                                    id="status"
                                                    name="status"
                                                    required>
                                                <option value="1" {{$product->status == 1 ? 'selected' : ''}}>
                                                    Active
                                                </option>

                                                <option value="0" {{$product->status == 0 ? 'selected' : ''}}>
                                                    Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <a href="{{route('products.index')}}" class="btn btn-active-secondary"><i class="ri-close-line me-1 align-middle"></i>Cancel</a>
                                        <button type="submit" class="btn btn-primary ms-2">Save Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-4">
                            <div class="card position-sticky top-20">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Images & Media</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-medium">Current Images</label>

                                            <div class="d-flex flex-wrap gap-3">
                                                @forelse($product->images as $image)
                                                    <div class="text-center">
                                                        <img src="{{ asset('storage/' . $image->image) }}"
                                                             alt="Product Image"
                                                             class="img-thumbnail"
                                                             width="120"
                                                             height="120">
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" name="delete_images[]" value="{{$image->id}}" id="image{{$image->id}}">
                                                            <label for="image{{$image->id}}" class="form-check-label">Remove</label>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <p class="text-muted">No images found.</p>
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="images" class="form-label fw-medium">
                                                Upload New Images
                                            </label>
                                            <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

