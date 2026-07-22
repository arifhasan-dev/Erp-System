@extends('website.master')
@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Add Supplier</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Suppliers</a></li>
                        <li class="breadcrumb-item active">Add Supplier</li>
                    </ul>
                </div>
                <form action="{{route('suppliers.update',$supplier->id)}}" method="post" enctype="multipart/form-data">
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
                        <div class="col-xxl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Supplier Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <label for="supplierImage" class="form-label">Supplier Image</label>
                                            <label for="supplierImage" class="avatar flex-column border rounded p-5 bg-light bg-opacity-75 h-44">
                                                <i data-lucide="upload-cloud" class="text-muted fs-2"></i>
                                                <p class="mt-2 text-muted mb-0">
                                                    <span class="fw-medium text-body">Drag & Drop</span> Image here or click to upload
                                                </p>
                                            </label>
                                            <input type="file" id="supplierImage" name="image" class="d-none">
                                            <img src="{{asset('Storage/' .$supplier->image)}}" alt="" height="70px" class="align-items-center">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="supplierName" class="form-label">Supplier Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="supplierName" value="{{$supplier->name}}" placeholder="Enter supplier name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" value="{{$supplier->email}}"  id="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="contact" class="form-label">Phone / Contact <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone" value="{{$supplier->phone}}" id="contact" placeholder="+1 234 567 890" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label d-block mb-5">Supplier Type</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="supplier_type" id="localSupplier" value="local" checked>
                                                <label class="form-check-label" value="{{$supplier->supplier_type == 'local' ? 'checked' : ''}}" for="localSupplier">Local</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="supplier_type" id="internationalSupplier" value="international">
                                                <label class="form-check-label" value="{{$supplier->supplier_type == 'international' ? 'checked' : ''}}" for="internationalSupplier">International</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="country" class="form-label">Country</label>
                                            <input
                                                type="text" class="form-control" id="country" name="country" value="{{$supplier->country}}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control"  name="city" value="{{$supplier->email}}"  id="city" placeholder="Enter city">
                                        </div>
                                        <div class="col-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter full address">{{$supplier->email}}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="paymentTerms" class="form-label">Payment Terms</label>
                                            <select name="payment_term" class="form-select">
                                                <option value="cash"{{$supplier->payment_term == 'cash' ? 'selected' : ''}}>Cash</option>
                                                <option value="advance" {{$supplier->payment_term == 'advance' ? 'selected' : ''}}>Advance Payment</option>
                                                <option value="net30" {{$supplier->payment_term == 'net30' ? 'selected' : ''}}>Net 30</option>
                                                <option value="net60" {{$supplier->payment_term == 'net60' ? 'selected' : ''}}>Net 60</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="currency" class="form-label">Currency</label>
                                            <select class="form-select" id="currency" name="currency">
                                                <option value="BDT" {{$supplier->currency == 'BDT' ? 'selected' : ''}}>BDT - Bangladeshi Taka</option>
                                                <option value="USD" {{$supplier->currency == 'USD' ? 'selected' : ''}}>USD - US Dollar</option>
                                                <option value="EUR" {{$supplier->currency == 'EUR' ? 'selected' : ''}}>EUR - Euro</option>
                                                <option value="GBP" {{$supplier->currency == 'GBP' ? 'selected' : ''}}>GBP - British Pound</option>
                                                <option value="INR" {{$supplier->currency == 'INR' ? 'selected' : ''}}>INR - Indian Rupee</option>
                                                <option value="CNY" {{$supplier->currency == 'CNY' ? 'selected' : ''}}>CNY - Chinese Yuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Company Details</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <label for="companyImage" class="form-label">Company Image</label>
                                            <label for="companyImage" class="avatar flex-column border rounded p-5 bg-light bg-opacity-75 h-44">
                                                <i data-lucide="upload-cloud" class="text-muted fs-2"></i>
                                                <p class="mt-2 text-muted mb-0">
                                                    <span class="fw-medium text-body">Drag & Drop</span> Image here or click to upload
                                                </p>
                                            </label>
                                            <input type="file" id="companyImage" name="company_image" class="d-none">
                                            <img src="{{asset('Storage/' .$supplier->company_image)}}" alt="" height="70px" class="align-items-center">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="company_name" value="{{$supplier->name}}" id="companyName" placeholder="Enter company name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companyEmail" class="form-label">Company Email</label>
                                            <input type="email" class="form-control" name="company_email" value="{{$supplier->company_email}}" id="companyEmail" placeholder="Enter company email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companyPhone" class="form-label">Company Phone</label>
                                            <input type="text" class="form-control" name="company_phone" value="{{$supplier->company_phone}}" id="companyPhone" placeholder="+1 234 567 890">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companyWebsite" class="form-label">Website</label>
                                            <input type="text" class="form-control" name="company_website" value="{{$supplier->company_website}}" id="companyWebsite" placeholder="https://example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="companyAddress" class="form-label">Address</label>
                                            <textarea class="form-control" name="company_address" id="companyAddress" rows="4" placeholder="Company address">{{$supplier->company_address}}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="taxNumber" class="form-label">Tax / VAT Number</label>
                                            <input type="text" class="form-control" name="tax_number" value="{{$supplier->tax_number}}"  id="taxNumber" placeholder="Tax or VAT number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="industryType" class="form-label">Industry Type</label>
                                            <input type="text" class="form-control" name="industry_type" value="{{$supplier->industry_type}}" id="industryType" placeholder="e.g., Manufacturing, Retail">
                                        </div>
                                        <select class="form-select" id="status" name="status">
                                            <option value="1" {{ $supplier->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $supplier->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        <div class="col-12 d-flex justify-content-end gap-2">
                                            <button type="reset" class="btn btn-outline-light border">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Supplier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Bank Details</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <label for="bankName" class="form-label">Bank Name</label>
                                            <input type="text" class="form-control" name="bank_name" id="bankName" value="{{ $supplier->bankAccounts->first()?->bank_name }}" placeholder="Bank Name">
                                        </div>
                                        <div class="col-12">
                                            <label for="accountName" class="form-label">Account Name</label>
                                            <input type="text" class="form-control" name="account_name" value="{{ $supplier->bankAccounts->first()?->account_name }}" id="accountName" placeholder="Account Name">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block">Account Type</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" {{ $supplier->bankAccounts->first()?->account_type == 'savings' ? 'checked' : '' }} name="account_type" id="savings" value="savings" checked>
                                                <label class="form-check-label" for="savings">Savings</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" {{ $supplier->bankAccounts->first()?->account_type == 'current' ? 'checked' : '' }} name="account_type" id="current" value="current">
                                                <label class="form-check-label" for="current">Current</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" {{ $supplier->bankAccounts->first()?->account_type == 'other' ? 'checked' : '' }} name="account_type" id="other" value="other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="accountNumber" class="form-label">Account Number</label>
                                            <input type="text" class="form-control" name="account_number"  value="{{ $supplier->bankAccounts->first()?->account_number }}"  id="accountNumber" placeholder="Account Number">
                                        </div>
                                        <div class="col-12">
                                            <label for="swiftIban" class="form-label">Swift / IBAN</label>
                                            <input type="text" class="form-control" name="swift_iban"  value="{{ $supplier->bankAccounts->first()?->swift_iban }}"  id="swiftIban" placeholder="Swift / IBAN">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="routing_number" class="form-label">Routing Number</label>
                                            <input type="text" class="form-control" id="routing_number" value="{{ $supplier->bankAccounts->first()?->routing_number }}" name="routing_number"
                                                   placeholder="Enter routing number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="branchCode" class="form-label">Branch Code</label>
                                            <input type="text" class="form-control" name="branch_code" value="{{ $supplier->bankAccounts->first()?->branch_code }}" id="branchCode" placeholder="Branch Code">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bankCity" class="form-label">Bank City</label>
                                            <input type="text" class="form-control" name="bank_city" value="{{ $supplier->bankAccounts->first()?->bank_city }}" id="bankCity" placeholder="City">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bank_country" class="form-label">Bank Country</label>
                                            <select class="form-select" id="bank_country" name="bank_country">
                                                <option value="">Select Country</option>
                                                <option value="Bangladesh" {{ $supplier->bankAccounts->first()?->bank_country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                                <option value="India" {{ $supplier->bankAccounts->first()?->bank_country == 'India' ? 'selected' : '' }}>India</option>
                                                <option value="United States" {{ $supplier->bankAccounts->first()?->bank_country == 'United States' ? 'selected' : '' }}>United States</option>
                                                <option value="United Kingdom" {{ $supplier->bankAccounts->first()?->bank_country == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                                <option value="China" {{ $supplier->bankAccounts->first()?->bank_country == 'China' ? 'selected' : '' }}>China</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="is_primary"
                                                    name="is_primary"
                                                    value="1"
                                                    checked>
                                                <label class="form-check-label" for="is_primary">
                                                    Set as Primary Account
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

