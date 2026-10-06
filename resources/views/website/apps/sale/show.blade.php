@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Purchase</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Purchase</a></li>
                        <li class="breadcrumb-item active">Purchase</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between mb-5">
                            <div>
                                <h5 class="card-title mb-1">Purchases List</h5>
                                <p class="text-muted">View and manage all purchase records including suppliers and items.</p>
                            </div>
                            <a href="{{route('sales.create')}}" class="btn btn-primary"><i data-lucide="plus" class="size-4 me-1"></i>Add Sales</a>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                <div class="position-relative">
                                    <input type="text" id="lostItemSearch" class="form-control ps-10" placeholder="Search Purchases...">
                                    <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                                </div>
                                <button type="button" class="btn btn-outline-light border flex-shrink-0"><i class="ri-file-pdf-line me-1"></i>Export PDF</button>
                                <button type="button" class="btn btn-outline-light border flex-shrink-0"><i class="ri-file-excel-line me-1"></i>Export Excel</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Sales ID</th>
                                        <td>{{$sale->sale_no}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Name</th>
                                        <td>{{$sale->customer->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sale Date</th>
                                        <td>{{$sale->sale_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Discount</th>
                                        <td>{{$sale->discount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>{{$sale->tax}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Charge</th>
                                        <td>{{$sale->shipping_charge}}</td>
                                    </tr>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td>{{$sale->subtotal}}</td>
                                    </tr>
                                    <tr>
                                        <th>Grand Total</th>
                                        <td>{{$sale->grand_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Paid Amount</th>
                                        <td>{{$sale->paid_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Due Amount</th>
                                        <td>{{$sale->due_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Status</th>
                                        <td><span>{{$sale->payment_status}}</span></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$sale->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Note</th>
                                        <td>{{$sale->note}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
