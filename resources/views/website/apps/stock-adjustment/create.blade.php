@extends('website.master')
@section('body')

                <div class="position-relative">
                    <div class="page-wrapper">
                        <div class="container-fluid">

                            <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                                <h6 class="flex-grow-1 mb-0">Add Adjustment</h6>
                                <ul class="breadcrumb flex-shrink-0 mb-0">
                                    <li class="breadcrumb-item"><a href="#!">Adjustment</a></li>
                                    <li class="breadcrumb-item active">Add Adjustment</li>
                                </ul>
                            </div>
                            <form action="{{route('stock-adjustments.store')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="adjustmentDate" class="form-label">Adjustment Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="adjustmentDate" name="adjustment_date" placeholder="Choose date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Product <span class="text-danger">*</span></label>
                                <select name="product_id" class="form-select">
                                    <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id }}" {{old('product_id') == $product->id ? 'selected' : ''}}>{{$product->name}}(Stock: {{$product->current_stock}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">
                                    Quantity <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                    name="quantity" id="quantity" class="form-control" step="0.01"
                                    min="0.01" value="{{ old('quantity') }}" placeholder="Enter quantity" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Type <span class="text-danger">*</span></label>
                                <select name="type" class="form-select">
                                    <option value="">Select Type</option>
                                    <option value="increase">Increase</option>
                                    <option value="decrease">Decrease</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="beforeQty" class="form-label"> Reason <span class="text-danger">*</span></label>
                                <select name="reason" class="form-select">
                                    <option value="">Select Type</option>
                                    <option value="damaged">damaged</option>
                                    <option value="expired">Expired</option>
                                    <option value="lost">Lost</option>
                                    <option value="found">Found</option>
                                    <option value="manual_correction">Manual Correction</option>
                                    <option value="stock_count">Stock Count</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"> Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-select">
                                    <option value="approved">Approved</option>
                                    <option value="draft">Draft</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Note</label>
                                <textarea name="note" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mt-7">
                            <a href="{{route('stock-adjustments.index')}}" class="btn btn-light w-100">Close</a>
                            <button type="submit" class="btn btn-primary w-100">Save Adjustment</button>
                        </div>
                    </form>
                    </div>
@endsection
