@extends('website.master')
@section('body')
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
                        <form method="post" action="{{route('purchases.update',$purchase->id)}}">
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
                            <div class="row g-5 mb-5">
                                <div class="col-md-4">
                                    <label for="supplierName" class="form-label">Supplier Name <span class="text-danger">*</span></label>
                                    <select name="supplier_id" class="form-select" required>
                                        <option value="">Select Supplier</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}"@selected(old('supplier_id',$purchase->supplier_id) == $supplier->id)>{{$supplier->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="purchaseDate" class="form-label">Invoice Date <span class="text-danger">*</span></label>
                                    <input type="date" id="purchaseDate" class="form-control" name="invoice_date" value="{{old('invoice_date',$purchase->invoice_date?->format('Y-m-d'))}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">
                                        Purchase Date <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" name="purchase_date" class="form-control" value="{{ old('purchase_date',$purchase->purchase_date?->format('Y-m-d')) }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Invoice No</label>
                                    <input
                                        type="text" name="invoice_no" class="form-control" value="{{ old('invoice_no',$purchase->invoice_no) }}" placeholder="Enter invoice number">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Purchase Status<span class="text-danger">*</span></label>
                                    <select name="status" class="form-select" required>
                                        <option value="draft"@selected(old('status', $purchase->status) == 'draft' )>Draft</option>
                                        <option value="ordered"@selected(old('status', $purchase->status) == 'ordered' )>Ordered</option>
                                        <option value="received"@selected(old('status', $purchase->status) == 'received')>Received</option>
                                        <option value="cancelled" @selected(old('status', $purchase->status) == 'cancelled' )>Cancelled</option>
                                        <option value="completed"@selected(old('status', $purchase->status) == 'completed')>Completed</option>
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
                                        @php
                                            $item = $purchase->items->first();
                                        @endphp
                                        <td>
                                            <select name="items[0][product_id]" class="form-select" required>
                                                <option value="">Select Product</option>
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}"@selected(old('items.0.product_id', $purchase->items->first()?->product_id) == $product->id)>{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][unit_cost]" class="form-control unit-cost" value="{{old('item.0.unit_cost',$item?->unit_cost)}}" step="0.01" required>
                                        </td>
                                        <td>0</td>
                                        <td>
                                            <input type="number" name="items[0][ordered_quantity]" class="form-control qty" value="{{old('item.0.ordered_quantity',$purchase?->ordered_quantity)}}" step="0.01" required>
                                        </td>
                                        <td>
                                            <input type="number" name="items[0][discount_amount]" class="form-control discount"  value="{{old('item.0.discount_amount',$purchase?->discount_amount)}}" step="0.01">
                                        </td>

                                        <td>
                                            <input type="number" name="items[0][tax_amount]" class="form-control tax" value="{{old('item.0.tax_amount',$purchase?->tax_amount)}}" step="0.01">
                                        </td>
                                        <td>
                                            auto
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm">×</button>
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
                                    <label for="orderTax" class="form-label">Order Tax Amount</label>
                                    <input type="number" class="form-control" name="tax_amount" value="{{$purchase->tax_amount}}"  id="orderTax" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="discount" class="form-label">Discount ($)</label>
                                    <input type="number" class="form-control" name="discount_amount" value="{{$purchase->discount_amount}}" id="discount" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="shipping" class="form-label">Shipping ($)</label>
                                    <input type="number" class="form-control" name="shipping_cost" value="{{$purchase->discount_amount}}" id="shipping" placeholder="0.00">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="warehouse" class="form-label">Payment Status <span class="text-danger">*</span></label>
                                    <select name="payment_status" class="form-select">
                                        <option value="pending" @selected(old('payment_status', $purchase->payment_status) == 'pending' )>Pending</option>
                                        <option value="partial" @selected(old('payment_status', $purchase->payment_status) == 'partial' )>Partial</option>
                                        <option value="paid" @selected(old('payment_status', $purchase->payment_status) == 'paid' )>Paid</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label class="form-label">Payment Method <span class="text-danger">*</span></label>
                                    <select name="payment_method" class="form-select" required>
                                        <option value="cash" @selected(old('payment_method', $purchase->payment_method) == 'cash')>Cash</option>
                                        <option value="bank" @selected(old('payment_method', $purchase->payment_method) == 'bank')>Bank</option>
                                        <option value="mobile_banking" @selected(old('payment_method', $purchase->payment_method) == 'mobile_banking')>Mobile Banking</option>
                                        <option value="cheque" @selected(old('payment_method', $purchase->payment_method) == 'cheque')>Cheque</option>
                                        <option value="other" @selected(old('payment_method', $purchase->payment_method) == 'other')>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label class="form-label">Paid Amount</label>
                                    <input type="number" name="paid_amount" class="form-control" step="0.01" value="{{$purchase->paid_amount}}">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label class="form-label">Payment Date</label>
                                    <input type="date" name="payment_date"  class="form-control" value="{{old('payment_date',$purchase->payments->first()?->payment_date->format('Y-m-d'))}}">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label for="transactionNo" class="form-label">Reference / Transaction No</label>
                                    <input type="text" name="transaction_no" id="transactionNo" class="form-control" value="{{ old('transaction_no',$purchase->payments->first()?->transaction_no) }}" placeholder="Enter transaction or reference number">
                                </div>
                                <div class="col-12">
                                    <label for="note" class="form-label">Note</label>
                                    <textarea name="note" class="form-control" rows="4">{{ old('note',$purchase->note) }}</textarea>
                                    <p class="text-muted mt-2">Maximum 20 Words Allowed</p>
                                </div>
                            </div>
                            <!-- Hidden Calculation Fields -->
                            <input type="hidden" name="subtotal" id="subtotalInput" value="0">
                            <input type="hidden" name="total_amount" id="totalAmountInput" value="0">
                            <input type="hidden" name="due_amount" id="dueAmountInput" value="0">
                            <div class="d-flex gap-2 justify-content-end mt-5">
                                <a href="{{route('purchases.index')}}" class="btn btn-light">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Purchase</button>
                            </div>
                        </form>
                    </div>
                </div>
@endsection

