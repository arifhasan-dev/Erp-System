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
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <form action="#">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="productName" class="form-label fw-medium">Product Name</label>
                                            <input type="text" id="productName" class="form-control" placeholder="Enter product name" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="productDescription" class="form-label fw-medium">Description</label>
                                            <textarea id="productDescription" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="categorySelect" class="form-label fw-medium">Category</label>
                                            <div id="categorySelect"></div>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="brandName" class="form-label fw-medium">Brand</label>
                                            <input type="text" id="brandName" class="form-control" placeholder="Brand name" required>
                                        </div>
                                        <div class="col-xxl-4">
                                            <label for="modelName" class="form-label fw-medium">Model</label>
                                            <input type="text" id="modelName" class="form-control" placeholder="Model name" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label fw-medium">Tags (Advanced)</label>
                                            <input class="form-control" placeholder="Add tags — Example: Best Seller" required>
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
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="unitPrice" class="form-label fw-medium">Unit Price</label>
                                            <input type="number" id="unitPrice" class="form-control" placeholder="₹0.00" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="costPrice" class="form-label fw-medium">Cost Price</label>
                                            <input type="number" id="costPrice" class="form-control" placeholder="₹0.00" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="marginPercent" class="form-label fw-medium">Margin (%) — Auto Calculator</label>
                                            <input type="number" id="marginPercent" class="form-control" placeholder="%" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-4 d-flex align-items-center gap-2">
                                            <div class="form-switch switch-light-primary mt-2">
                                                <input class="form-check-input" type="checkbox" id="availableSale" checked required>
                                                <label class="form-check-label" for="availableSale"></label>
                                            </div>
                                            <p class="mb-0">Available for Sale</p>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="stockQty" class="form-label fw-medium">Stock Quantity</label>
                                            <div class="input-spin-group input-spin-primary">
                                                <button type="button" class="input-spin-minus"><i data-lucide="minus" class="size-4"></i></button>
                                                <input type="text" class="input-spin form-control" readonly value="1">
                                                <button type="button" class="input-spin-plus"><i data-lucide="plus" class="size-4"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="lowStockAlert" class="form-label fw-medium">Low Stock Alert</label>
                                            <div class="input-spin-group input-spin-primary">
                                                <button type="button" class="input-spin-minus"><i data-lucide="minus" class="size-4"></i></button>
                                                <input type="text" id="lowStockAlert" class="input-spin form-control" readonly value="1">
                                                <button type="button" class="input-spin-plus"><i data-lucide="plus" class="size-4"></i></button>
                                            </div>
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
                                        <div class="col-md-6 col-xxl-3">
                                            <label for="sku" class="form-label fw-medium">SKU</label>
                                            <input type="text" id="sku" class="form-control" placeholder="SKU" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-3">
                                            <label for="tax" class="form-label fw-medium">Tax (%)</label>
                                            <input type="number" id="tax" class="form-control" placeholder="18" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-3">
                                            <label for="lowStockalert" class="form-label fw-medium">Low Stock Alert</label>
                                            <input type="number" id="lowStockalert" class="form-control" placeholder="e.g. 5" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-3">
                                            <label for="trackInventory" class="form-label fw-medium">Track Inventory</label>
                                            <div id="trackInventory"></div>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="expiryDate" class="form-label fw-medium">Expiry Date</label>
                                            <input type="text" id="expiryDate" class="form-control" data-datepicker data-date-format="dd-MM-yyyy" placeholder="Choose date" required>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="Warranty" class="form-label fw-medium">Warranty</label>
                                            <div id="Warranty"></div>
                                        </div>
                                        <div class="col-md-6 col-xxl-4">
                                            <label for="productStatus" class="form-label fw-medium">Product Status</label>
                                            <div id="productStatus"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="hsnCode" class="form-label fw-medium">HSN Code</label>
                                            <input type="text" id="hsnCode" class="form-control" placeholder="Enter HSN code" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="returnPolicy" class="form-label fw-medium">Return Policy</label>
                                            <div id="returnPolicy"></div>
                                        </div>
                                    </div>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button type="button" class="btn btn-active-secondary"><i class="ri-close-line me-1 align-middle"></i>Cancel</button>
                                        <button type="submit" class="btn btn-primary ms-2">Save Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div class="card position-sticky top-20">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Images & Media</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="mainProductImage" class="avatar h-52 p-5 text-center bg-light rounded cursor-pointer">
                                            <div>
                                                <i data-lucide="upload-cloud"></i><br>
                                                <div class="mt-3"><strong>Drag & Drop</strong> images here or click to upload</div>
                                            </div>
                                        </label>
                                        <input type="file" id="mainProductImage" class="d-none">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subImage1" class="avatar h-28 p-4 text-center bg-light rounded cursor-pointer">
                                            <div>
                                                <i data-lucide="upload-cloud" class="size-5"></i>
                                                <div class="mt-1 fs-sm">Image 2</div>
                                            </div>
                                        </label>
                                        <input type="file" id="subImage1" class="d-none">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subImage2" class="avatar h-28 p-4 text-center bg-light rounded cursor-pointer">
                                            <div>
                                                <i data-lucide="upload-cloud" class="size-5"></i>
                                                <div class="mt-1 fs-sm">Image 3</div>
                                            </div>
                                        </label>
                                        <input type="file" id="subImage2" class="d-none">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subImage3" class="avatar h-28 p-4 text-center bg-light rounded cursor-pointer">
                                            <div>
                                                <i data-lucide="upload-cloud" class="size-5"></i>
                                                <div class="mt-1 fs-sm">Image 4</div>
                                            </div>
                                        </label>
                                        <input type="file" id="subImage3" class="d-none">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="imageTitle" class="form-label fw-medium">Image Title</label>
                                        <input type="text" id="imageTitle" class="form-control" placeholder="title">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="imageTags" class="form-label fw-medium">Image Tags</label>
                                        <input type="text" id="imageTags" class="form-control" placeholder="e.g. packaging">
                                    </div>
                                    <div class="col-12">
                                        <label for="productVideoUrl" class="form-label fw-medium">Product Video URL</label>
                                        <input type="text" id="productVideoUrl" class="form-control" placeholder="YouTube / Vimeo / MP4 link">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
