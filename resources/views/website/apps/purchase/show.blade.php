@extends('website.master')
@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Suppliers List</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Suppliers</a></li>
                        <li class="breadcrumb-item active">Suppliers List</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header d-flex flex-wrap gap-4 align-items-center gap-2 justify-content-between">
                        <div class="position-relative">
                            <input type="text" id="lostItemSearch" class="form-control ps-10" placeholder="Search Suppliers...">
                            <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-4 translate-middle-y"></i>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <div id="spplierStatus" class="w-44"></div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-outline-light border" data-bs-toggle="dropdown" aria-expanded="false"><i data-lucide="arrow-down-to-line" class="size-4 me-1"></i>Export As</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#!" id="exportPrint">Print PDF</a></li>
                                    <li><a class="dropdown-item" href="#!" id="exportJSON">Export CSV</a></li>
                                    <li><a class="dropdown-item" href="#!" id="exportXML">Export XML</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-card table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <td>{{$purchase->id}}</td>
                                </tr>
                                <tr>
                                    <th>Supplier ID</th>
                                    <td>{{$purchase->supplier?->name ?? 'N/A'}}</td>
                                </tr>
                                <tr>
                                    <th>Invoice Date</th>
                                    <td>{{$purchase->invoice_date}}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Date</th>
                                    <td>{{$purchase->purchase_date}}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Status</th>
                                    <td>
                                        <span class="badge bg-success">{{$purchase->status}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tax Amount</th>
                                    <td>{{$purchase->tax_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Discount Amount</th>
                                    <td>{{$purchase->discount_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Cost</th>
                                    <td>{{$purchase->shipping_cost}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    <td>{{$purchase->payment_status}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <td>{{$purchase->payment_method}}</td>
                                </tr>
                                <tr>
                                    <th>Paid Amount</th>
                                    <td>{{$purchase->paid_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Date</th>
                                    <td>{{ $purchase->payments->first()?->payment_date ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Transaction No</th>
                                    <td>{{ $purchase->payments->first()?->transaction_no ?? 'N/A'}}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Note</th>
                                    <td>{{ $purchase->note}}</td>
                                </tr>

                                </thead>
                            </table>
                        </div>
                    </div>
                </div>


@endsection


