@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Customers Add</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Customers</a></li>
                        <li class="breadcrumb-item active">Customers Add</li>
                    </ul>
                </div>
                <div class="row g-4">
                    <div class="col-xl-12 col-xxl-8 order-2 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="customerPillsTabContent">
                                    <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-info-tab">
                                        <h5 class="card-title mb-2 fs-16">Basic Information</h5>
                                        <p class="text-muted mb-6">Enter the essential details for the customer including name, email, phone, and type.</p>
                                        <form action="{{route('customers.store')}}" method="post">
                                            @csrf
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <label for="customerName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" id="customerName" placeholder="Enter full name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="customerEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email" id="customerEmail" placeholder="Enter email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="customerPhone" class="form-label">Phone <span class="text-danger">*</span></label>
                                                    <input type="tel" class="form-control" id="customerPhone" name="phone" placeholder="Enter phone number" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="customerPhone" class="form-label">Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="customerPhone" name="address" placeholder="Enter phone number" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="customerCompany" class="form-label">Opening Balance</label>
                                                    <input type="number" class="form-control" id="customerCompany" name="opening_balance" placeholder="Enter company name">
                                                </div>
                                                <div class="col-6">
                                                    <label for="customerDesignation" class="form-label">Credit Limit</label>
                                                    <input type="number" class="form-control" id="customerDesignation" name="credit_limit" placeholder="Enter designation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="customerStatus" class="form-label">Status</label>
                                                    <select class="form-select" id="status" name="status" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="customerNotes" class="form-label">Notes</label>
                                                    <textarea class="form-control" id="customerNotes" name="note" rows="3" placeholder="Enter additional notes"></textarea>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <a href="{{route('customers.index')}}" class="btn btn-outline-light border me-1"><i class="ri-arrow-left-line me-1"></i>Close</a>
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ri-arrow-right-line ms-1"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
