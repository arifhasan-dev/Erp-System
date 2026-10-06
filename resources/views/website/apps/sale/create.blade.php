@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Add</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Purchase</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Create Purchase</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('sales.store')}}" method="post">
                            @csrf
                            <div class="row g-5 mb-5">
                                <div class="col-md-4">
                                    <label for="customer_id" class="form-label">Customer Name <span class="text-danger">*</span></label>
                                    <select name="customer_id" id="customer_id" class="form-select" required>
                                        <option value="">Select Customer</option>
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}"{{old('customer_id') == $customer->id ? 'selected' : ''}}>
                                                {{$customer->name}}
                                                @if($customer->customer_code)
                                                    - {{$customer->customer_code}}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="purchaseDate" class="form-label"> Sale Date <span class="text-danger">*</span></label>
                                    <input type="text" id="purchaseDate" name="sale_date" class="form-control" value="{{ old('sale_date',now()->toDateString()) }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="productSearch" class="form-label">Product</label>
                                    <select name="items[0][product_id]" id="product_id" class="form-select" required>
                                        <option value="">Select Product</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}" {{old('items.0.product_id') == $product->id ? 'selected' : ''}}>
                                                {{$product->name}}
                                                @if($product->code)
                                                    - {{$product->code}}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive mb-5">
                                <table class="table table-borderless align-middle text-center text-nowrap">
                                    <thead>
                                    <tr class="bg-light">
                                        <th class="fw-medium text-muted">Product</th>
                                        <th class="fw-medium text-muted">Net Unit Cost</th>
                                        <th class="fw-medium text-muted">Stock</th>
                                        <th class="fw-medium text-muted">Qty</th>
                                        <th class="fw-medium text-muted">Discount</th>
                                        <th class="fw-medium text-muted">Tax (%)</th>
                                        <th class="fw-medium text-muted">Subtotal</th>
                                        <th class="fw-medium text-muted">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="orderItems">
                                    <tr>
                                        <td>
                                            <span class="text-muted">Select product above</span>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][unit_price]" class="form-control" step="0.01" min="0" value="{{old('items.0.unit_price',0)}}" required>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                -
                                            </span>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][quantity]" class="form-control" step="0.01" min="0.01" value="{{old('items.0.quantity',1)}}" required>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][discount]" class="form-control" step="0.01" min="0" value="{{old('items.0.discount',0)}}" required>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][tax]" class="form-control" step="0.01" min="0" value="{{old('items.0.tax',0)}}">
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                -
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-light" disabled>Remove</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-4 offset-md-8">
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-end text-nowrap">
                                            <tr>
                                                <td>Order Tax</td>
                                                <td>0.00 $ (0.00%)</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>0.00 $</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>0.00 $</td>
                                            </tr>
                                            <tr class="fw-bold">
                                                <td>Grand Total</td>
                                                <td>0.00 $</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5">
                                <div class="col-md-6 col-lg-4">
                                    <label for="orderTax" class="form-label">Order Tax (%)</label>
                                    <input type="number" name="tax" class="form-control" step="0.01" min="0" value="{{old('tax',0)}}" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="discount" class="form-label">Discount ($)</label>
                                    <input type="number" class="form-control" name="discount" step="0.01" min="0" value="{{old('discount',0)}}" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="shipping" class="form-label">Shipping ($)</label>
                                    <input type="number" class="form-control" name="shipping_charge" step="0.01" min="0" value="{{old('shipping_charge',0)}}" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="paid_amount" class="form-label">Paid Amount  ($)</label>
                                    <input type="number" class="form-control" name="paid_amount" step="0.01" min="0" value="{{old('paid_amount',0)}}" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="paid_date" class="form-label">Paid Date </label>
                                    <input type="date" class="form-control" name="paid_date" value="{{ old('payment_date', now()->toDateString()) }}">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label class="form-label">Payment Method <span class="text-danger">*</span></label>
                                    <select name="payment_method" class="form-control">
                                        <option value="">Select payment Method</option>
                                        <option value="cash"{{old('payment_method') == 'cash' ? 'selected' : ''}}>Cash</option>
                                        <option value="bank"{{old('payment_method') == 'bank' ? 'selected' : ''}}>Bank</option>
                                        <option value="mobile_banking"{{old('payment_method') == 'mobile_banking' ? 'selected' : ''}}>Mobile Banking</option>
                                        <option value="cheque"{{old('payment_method') == 'cheque' ? 'selected' : ''}}>Cheque</option>
                                        <option value="other"{{old('payment_method') == 'other' ? 'selected' : ''}}>other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="referenceNo" class="form-label">Reference / Invoice No</label>
                                    <input type="text" class="form-control" name="transaction_reference" value="{{ old('transaction_reference') }}" id="referenceNo" placeholder="Enter invoice or reference number">
                                </div>
                                <div class="col-12">
                                    <label for="note" class="form-label">Note</label>
                                    <textarea name="note" id="note" class="form-control" value="{{old('note')}}"></textarea>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-end mt-5">
                                <a href="{{route('sales.index')}}" class="btn btn-light">Cancel</a>
                                <button type="submit" class="btn btn-primary">Create Purchase</button>
                            </div>
                        </form>
                    </div>
                </div>
@endsection
