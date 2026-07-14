@extends('website.master')
@section('body')
    {{----------------}}
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Main</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Dashboards</a></li>
                        <li class="breadcrumb-item active">Main</li>
                    </ul>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between">
                                        <div>
                                            <p class="mb-3">Today Sales</p>
                                            <h5 class="mb-5 fs-22">$<span class="counter" data-start="0" data-end="12450" data-duration="2000"></span></h5>
                                            <span class="text-muted"><span class="text-success me-1"><i data-lucide="arrow-big-up-dash" class="size-4"></i>8.4%</span>From Last Week</span>
                                        </div>
                                        <div class="position-relative size-10 widget-icon">
                                            <div class="position-absolute top-0 h-100 w-100 rounded-2 bg-primary bg-opacity-25 bg-layer z-0"></div>
                                            <div class="rounded-2 size-9 avatar primary-gradient position-relative">
                                                <i data-lucide="dollar-sign" class="size-5 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between">
                                        <div>
                                            <p class="mb-3">Total Orders</p>
                                            <h5 class="mb-5 fs-22"><span class="counter" data-start="0" data-end="1865" data-duration="2000"></span></h5>
                                            <span class="text-muted"><span class="text-success me-1"><i data-lucide="arrow-big-up-dash" class="size-4"></i>5.2%</span>From Last Week</span>
                                        </div>
                                        <div class="position-relative size-10 widget-icon">
                                            <div class="position-absolute top-0 h-100 w-100 rounded-2 bg-secondary bg-opacity-25 bg-layer z-0"></div>
                                            <div class="rounded-2 size-9 avatar secondary-gradient position-relative">
                                                <i data-lucide="shopping-cart" class="size-5 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between">
                                        <div>
                                            <p class="mb-3">Net Profit</p>
                                            <h5 class="mb-5 fs-22">$<span class="counter" data-start="0" data-end="4320" data-duration="2000"></span></h5>
                                            <span class="text-muted"><span class="text-success me-1"><i data-lucide="arrow-big-up-dash" class="size-4"></i>6.8%</span>From Last Week</span>
                                        </div>
                                        <div class="position-relative size-10 widget-icon">
                                            <div class="position-absolute top-0 h-100 w-100 rounded-2 bg-success bg-opacity-25 bg-layer z-0"></div>
                                            <div class="rounded-2 size-9 avatar success-gradient position-relative">
                                                <i data-lucide="trending-up" class="size-5 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between">
                                        <div>
                                            <p class="mb-3">Sales Return</p>
                                            <h5 class="mb-5 fs-22">$<span class="counter" data-start="0" data-end="540" data-duration="2000"></span></h5>
                                            <span class="text-muted"><span class="text-danger me-1"><i data-lucide="arrow-big-down-dash" class="size-4"></i>2.1%</span>From Last Week</span>
                                        </div>
                                        <div class="position-relative size-10 widget-icon">
                                            <div class="position-absolute top-0 h-100 w-100 rounded-2 bg-danger bg-opacity-25 bg-layer z-0"></div>
                                            <div class="rounded-2 size-9 avatar danger-gradient position-relative">
                                                <i data-lucide="rotate-ccw" class="size-5 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="mb-3 d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                            <h6 class="mb-0">Sales Trend <span class="text-muted fw-normal ms-1">(75% sales growth)</span></h6>
                                            <div class="dropdown">
                                                <a href="#!" class="link link-custom-primary badge border d-flex align-items-center fs-12 py-1.5 px-3 dropdown-toggle" aria-label="Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Recent
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#!">Recent</a>
                                                    <a class="dropdown-item" href="#!">Weekly</a>
                                                    <a class="dropdown-item" href="#!">Monthly</a>
                                                    <a class="dropdown-item" href="#!">Yearly</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-6 mb-4">
                                            <div class="d-flex gap-1 align-items-center">
                                                <i data-lucide="squircle" class="icon-secondary size-4"></i>
                                                <span>Total Sales</span>
                                            </div>
                                            <div class="d-flex gap-1 align-items-center">
                                                <i data-lucide="squircle" class="icon-primary size-4"></i>
                                                <span>Total Orders</span>
                                            </div>
                                        </div>
                                        <div id="salesTrend"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card card-h-100 staff-performance">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Staff Performance</h6>
                                        <a href="#" class="fs-sm text-muted">View Report</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="team-avatars mb-2">
                                            <div class="position-relative my-6">
                                                <div class="mx-auto size-24 avatar bg-purple-subtle rounded-circle">
                                                    <img src="{{asset('/')}}website/assets/user-81-DbDFUJ_h.png" class="size-20">
                                                </div>
                                                <div class="size-12 avatar bg-secondary-subtle rounded-circle avatar-1">
                                                    <img src="{{asset('/')}}website/assets/user-80-BfFGHbQs.png" class="size-10">
                                                </div>
                                                <div class="size-12 avatar bg-primary-subtle rounded-circle avatar-2">
                                                    <img src="{{asset('/')}}website/assets/user-82-T_LJVf8e.png" class="size-10">
                                                </div>
                                                <div class="size-12 avatar bg-dark-subtle rounded-circle avatar-3">
                                                    <img src="{{asset('/')}}website/assets/user-83-DyrO36bK.png" class="size-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center pt-7 pb-6">
                                            <h6 class="mb-1">Top Performing Staff</h6>
                                            <p class="text-muted">Based on sales & order completion</p>
                                        </div>
                                        <div class="row text-center g-3">
                                            <div class="col-4">
                                                <div class="border border-dashed p-3 rounded">
                                                    <h5 class="mb-1 fs-lg"><span class="counter" data-start="0" data-end="82" data-duration="2000"></span>%</h5>
                                                    <p class="text-muted fs-xs mb-0">Best</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="border border-dashed p-3 rounded">
                                                    <h5 class="mb-1 fs-lg"><span class="counter" data-start="0" data-end="1248" data-duration="2000"></span></h5>
                                                    <p class="text-muted fs-xs mb-0">Orders</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="border border-dashed p-3 rounded">
                                                    <h5 class="mb-1 fs-lg">₹<span class="counter" data-start="0" data-end="4.8" data-duration="2000"></span>L</h5>
                                                    <p class="text-muted fs-xs mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Low Stock Items</h6>
                                        <a href="apps-inventory-alerts.html" class="link link-custom-primary">View All <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless text-nowrap align-middle mb-0">
                                                <thead>
                                                <tr>
                                                    <th class="ps-4">Product</th>
                                                    <th>SKU</th>
                                                    <th>Stock</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="ps-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="size-10 avatar flex-shrink-0 bg-light rounded-1">
                                                                <img src="{{asset('/')}}website/assets/img-21-DthxwD3u.png" class="img-fluid size-9">
                                                            </div>
                                                            <div class="lh-sm">
                                                                <a href="#!" class="text-reset d-block fw-medium mb-1">Urban Sneakers</a>
                                                                <p class="text-muted fs-sm">45%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted text-nowrap">SH-204</td>
                                                    <td>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <div class="progress h-6px w-20" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 45%"></div>
                                                            </div>
                                                            <p class="fs-sm">452</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="size-10 avatar flex-shrink-0 bg-light rounded-1">
                                                                <img src="{{asset('/')}}website/assets/img-22-D2w1zjf6.png" class="img-fluid size-9">
                                                            </div>
                                                            <div class="lh-sm">
                                                                <a href="#!" class="text-reset d-block fw-medium mb-1">Fresh Flower</a>
                                                                <p class="text-muted fs-sm">65%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted text-nowrap">FL-097</td>
                                                    <td>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <div class="progress h-6px w-20">
                                                                <div class="progress-bar rounded-pill bg-indigo" style="width: 65%"></div>
                                                            </div>
                                                            <p class="fs-sm">596</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="size-10 avatar flex-shrink-0 bg-light rounded-1">
                                                                <img src="{{asset('/')}}website/assets/img-23-CLteivci.png" class="img-fluid size-9">
                                                            </div>
                                                            <div class="lh-sm">
                                                                <a href="#!" class="text-reset d-block fw-medium mb-1">Kids Cartoon Toy</a>
                                                                <p class="text-muted fs-sm">49%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted text-nowrap">TY-541</td>
                                                    <td>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <div class="progress h-6px w-20">
                                                                <div class="progress-bar rounded-pill bg-success" style="width: 49%"></div>
                                                            </div>
                                                            <p class="fs-sm">467</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="size-10 avatar flex-shrink-0 bg-light rounded-1">
                                                                <img src="{{asset('/')}}website/assets/img-15-DIFIfTen.png" class="img-fluid size-9">
                                                            </div>
                                                            <div class="lh-sm">
                                                                <a href="#!" class="text-reset d-block fw-medium mb-1">Indoor Plants</a>
                                                                <p class="text-muted fs-sm">74%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted text-nowrap">PL-764</td>
                                                    <td>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <div class="progress h-6px w-20">
                                                                <div class="progress-bar rounded-pill bg-danger" style="width: 74%"></div>
                                                            </div>
                                                            <p class="fs-sm">745</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="size-10 avatar flex-shrink-0 bg-light rounded-1">
                                                                <img src="{{asset('/')}}website/assets/img-18-4m2mhWxW.png" class="img-fluid size-9">
                                                            </div>
                                                            <div class="lh-sm">
                                                                <a href="#!" class="text-reset d-block fw-medium mb-1">Wireless Earbuds</a>
                                                                <p class="text-muted fs-sm">36%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted text-nowrap">EL-882</td>
                                                    <td>
                                                        <div class="d-flex gap-3 align-items-center">
                                                            <div class="progress h-6px w-20">
                                                                <div class="progress-bar rounded-pill bg-warning" style="width: 36%"></div>
                                                            </div>
                                                            <p class="fs-sm">369</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h6 class="mb-0">Profit vs Sales</h6>
                                        <div class="dropdown">
                                            <a href="#!" class="link link-custom-primary badge border d-flex align-items-center fs-12 py-1.5 px-3 dropdown-toggle" aria-label="Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Monthly
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#!">Weekly</a>
                                                <a class="dropdown-item" href="#!">Monthly</a>
                                                <a class="dropdown-item" href="#!">Yearly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="profitvsSales"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-12 col-xl-4 col-xxl-12">
                                <div dir="ltr" class="card card-h-100 position-relative">
                                    <img src="{{asset('/')}}website/assets/pattern-1-8cPSaOkL.png" alt="Pattern" class="opacity-75 position-absolute bottom-0 end-0 z-0 img-fluid h-28 overview-pattern">
                                    <div class="card-body p-5">
                                        <div class="swiper swiper-secondary informationSwiper">
                                            <div class="swiper-wrapper pb-12">
                                                <div class="swiper-slide">
                                                    <div class="d-flex flex-wrap gap-2 gap-md-4 mb-4">
                                                        <div class="size-12 avatar rounded-circle bg-gradient-t-secondary text-secondary"><i data-lucide="align-center-vertical" class="size-5"></i></div>
                                                        <div>
                                                            <p class="text-muted mb-1">Active Suppliers Registered</p>
                                                            <h5 class="mb-4 fs-xl">6,987 <span class="text-success fs-sm fw-normal ms-1">12.5%</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Active Rate</p>
                                                            <p class="fw-medium">92%</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Avg Supply</p>
                                                            <p class="fw-medium">14 days</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Delivery</p>
                                                            <p class="fw-medium">63%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="d-flex flex-wrap gap-2 gap-md-4 mb-4">
                                                        <div class="size-12 avatar rounded-circle bg-gradient-t-secondary text-secondary">
                                                            <i data-lucide="user-check" class="size-5"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted mb-1">Total Active Customers</p>
                                                            <h5 class="mb-4 fs-xl">12,458 <span class="text-danger fs-sm fw-normal ms-1">8.2%</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Repeat Rate</p>
                                                            <p class="fw-medium">67%</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">New Today</p>
                                                            <p class="fw-medium">128</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Avg Spend</p>
                                                            <p class="fw-medium">$42</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="d-flex flex-wrap gap-2 gap-md-4 mb-4">
                                                        <div class="size-12 avatar rounded-circle bg-gradient-t-secondary text-secondary">
                                                            <i data-lucide="clipboard-list" class="size-5"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted mb-1">Total Orders Processed</p>
                                                            <h5 class="mb-4 fs-xl">34,892 <span class="text-success fs-sm fw-normal ms-1">15.9%</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Completed</p>
                                                            <p class="fw-medium">81%</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Pending</p>
                                                            <p class="fw-medium">12%</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <p class="text-muted mb-0 fs-sm">Cancelled</p>
                                                            <p class="fw-medium">7%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination custom-dot-pagination py-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 col-xxl-12">
                                <div class="card card-h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0 fw-medium">Gross Profit</h6>
                                            <span class="badge bg-light text-muted border fs-12">Last Year -5%</span>
                                        </div>
                                        <h4 class="fs-22">$486k</h4>
                                        <div id="grossProfit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 col-xxl-12">
                                <div class="card">
                                    <div class="card-header d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                        <h6 class="mb-0">Top Selling Products</h6>
                                        <span class="text-muted fs-sm">Monthly Update</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush list-borderless">
                                            <li class="list-group-item d-flex flex-wrap gap-3 align-items-center justify-content-between px-4 py-3">
                                                <div class="size-11 avatar bg-light rounded-1">
                                                    <img src="{{asset('/')}}website/assets/img-11-CdZrMCnG.png" alt="Urban Runner Sneakers" class="img-fluid size-10">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="text-reset d-block fw-medium">Urban Runner Sneakers</a>
                                                    <span class="text-muted fs-13">SKU: SH-204 • <span class="text-success fw-medium">14.2%</span></span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span class="text-muted fs-sm">Sales</span>
                                                    <p class="fw-medium">1,120</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex flex-wrap gap-3 align-items-center justify-content-between px-4 py-3">
                                                <div class="size-11 avatar bg-light rounded-1">
                                                    <img src="{{asset('/')}}website/assets/img-07-9mjzrP7h.png" alt="Elegant Leather Heels" class="img-fluid size-10">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="text-reset d-block fw-medium">Elegant Leather Heels</a>
                                                    <span class="text-muted fs-13">SKU: HL-118 • <span class="text-success fw-medium">9.6%</span></span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span class="text-muted fs-sm">Sales</span>
                                                    <h6 class="mb-0 fw-medium">985</h6>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex flex-wrap gap-3 align-items-center justify-content-between px-4 py-3">
                                                <div class="size-11 avatar bg-light rounded-1">
                                                    <img src="{{asset('/')}}website/assets/img-13-jddltqv1.png" alt="Denim Winter Jacket" class="img-fluid size-10">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="text-reset d-block fw-medium">Denim Winter Jacket</a>
                                                    <span class="text-muted fs-13">SKU: JK-332 • <span class="text-success fw-medium">6.1%</span></span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span class="text-muted fs-sm">Sales</span>
                                                    <h6 class="mb-0 fw-medium">742</h6>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex flex-wrap gap-3 align-items-center justify-content-between px-4 py-3">
                                                <div class="size-11 avatar bg-light rounded-1">
                                                    <img src="{{asset('/')}}website/assets/img-14-Bq_mg9xG.png" alt="Fresh Flower Bouquet" class="img-fluid size-10">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="text-reset d-block fw-medium">Fresh Flower Bouquet</a>
                                                    <span class="text-muted fs-13">SKU: FL-097 • <span class="text-danger fw-medium">2.4%</span></span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span class="text-muted fs-sm">Sales</span>
                                                    <h6 class="mb-0 fw-medium">689</h6>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex flex-wrap gap-3 align-items-center justify-content-between px-4 py-3">
                                                <div class="size-11 avatar bg-light rounded-1">
                                                    <img src="{{asset('/')}}website/assets/img-15-DIFIfTen.png" alt="Kids Cartoon Toy Set" class="img-fluid size-10">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="text-reset d-block fw-medium">Kids Cartoon Toy Set</a>
                                                    <span class="text-muted fs-13">SKU: TY-541 • <span class="text-success fw-medium">11.8%</span></span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span class="text-muted fs-sm">Sales</span>
                                                    <h6 class="mb-0 fw-medium">531</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="mb-5 d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-1">Total Customers</h6>
                                        <p class="text-muted">Active customers across all stores</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown">
                                            <i class="ri-more-2-fill fs-17"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item">Weekly</a></li>
                                            <li><a href="#!" class="dropdown-item">Monthly</a></li>
                                            <li><a href="#!" class="dropdown-item">Yearly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between mb-5">
                                    <div>
                                        <h5 class="mb-1 fs-2xl"><span class="counter" data-start="0" data-end="8426" data-duration="2000"></span></h5>
                                        <span class="text-success me-2">+12.4% <span class="text-muted">vs last month</span></span>
                                    </div>
                                    <div class="avatar-group">
                                        <a href="#!" class="avatar-group-item">
                                            <img src="{{asset('/')}}website/assets/user-31-CWuT1crC.png" loading="lazy" alt="User" class="size-9">
                                        </a>
                                        <a href="#!" class="avatar-group-item">
                                            <img src="{{asset('/')}}website/assets/user-32-BgzzEVmr.png" loading="lazy" alt="User" class="size-9">
                                        </a>
                                        <a href="#!" class="avatar-group-item">
                                            <img src="{{asset('/')}}website/assets/user-33-D2RvU5Ax.png" loading="lazy" alt="User" class="size-9">
                                        </a>
                                        <a href="#!" class="avatar-group-item">
                                            <div class="avatar bg-light size-9 text-muted fw-medium">4+</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-10px rounded border mb-4">
                                    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                        <div class="progress-circle fs-12" data-stroke-width="4" data-color="var(--dx-danger)" data-value="38" data-size="50" data-color="var(--dx-success)"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0 fw-medium">New Customers <span class="text-danger fw-medium ms-1">38.1%</span></h6>
                                            <p class="text-muted text-truncate">Customers joined this month</p>
                                        </div>
                                        <a href="#!" class="link link-custom-primary flex-shrink-0"><i data-lucide="chevron-right" class="size-5"></i></a>
                                    </div>
                                </div>
                                <div class="p-10px rounded border">
                                    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                        <div class="progress-circle fs-12" data-stroke-width="4" data-color="var(--dx-success)" data-value="78.6" data-size="50" data-color="var(--dx-success)"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0 fw-medium">Loyalty Customers <span class="text-success fw-medium ms-1">78.6%</span></h6>
                                            <p class="text-muted text-truncate">Repeat buyers ratio</p>
                                        </div>
                                        <a href="#!" class="link link-custom-primary flex-shrink-0"><i data-lucide="chevron-right" class="size-5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-2">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="pb-5 border-bottom-0">
                                    <h6 class="card-title mb-0">Payment methods</h6>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mb-1"> <i data-lucide="star" class="size-3 me-2 icon-indigo"></i>75%</h5>
                                        <p class="text-muted">Visa Card</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-1"> <i data-lucide="star" class="size-3 me-2 icon-pink"></i>58%</h5>
                                        <p class="text-muted">Mastercard</p>
                                    </div>
                                </div>
                                <div id="paymentMethodsChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center border-bottom-0 pb-0">
                                <h6 class="card-title mb-0">Inventory management</h6>
                                <div class="d-flex flex-wrap gap-4 align-items-center">
                                    <div class="d-flex flex-wrap align-items-center gap-3 gap-md-6">
                                        <a href="#!" class="d-flex align-items-center text-reset gap-2">
                                            <div class="size-2 rounded-circle bg-primary"></div>
                                            <span class="text-muted">Stock In</span>
                                        </a>
                                        <a href="#!" class="d-flex align-items-center text-reset gap-2">
                                            <div class="size-2 rounded-circle bg-secondary"></div>
                                            <span class="text-muted">Stock Out</span>
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#!" class="link link-custom-primary badge border d-flex align-items-center fs-12 py-1.5 px-3 dropdown-toggle" aria-label="Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Monthly
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#!">Weekly</a>
                                            <a class="dropdown-item" href="#!">Monthly</a>
                                            <a class="dropdown-item" href="#!">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div id="InventoryManagement"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h6 class="card-title mb-0">Order Analytics</h6>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary badge border d-flex align-items-center fs-12 py-1.5 px-3 dropdown-toggle" aria-label="Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Yearly
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#!">Weekly</a>
                                        <a class="dropdown-item" href="#!">Monthly</a>
                                        <a class="dropdown-item" href="#!">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="orderAnalytics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h6 class="card-title mb-0">Recent Transactions</h6>
                                <div class="dropdown">
                                    <a href="#!" class="link link-custom-primary" data-bs-toggle="dropdown">
                                        <i class="ri-more-2-fill fs-17"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="#!" class="dropdown-item">Weekly</a></li>
                                        <li><a href="#!" class="dropdown-item">Monthly</a></li>
                                        <li><a href="#!" class="dropdown-item">Yearly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-4 mx-n4" data-simplebar style="max-height: 330px;">
                                    <div class="pb-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-35-BmoKuJtd.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10482</h6>
                                                    <p class="text-muted">Paid via UPI • 2 min ago</p>
                                                </div>
                                            </div>
                                            <h6>₹2,450</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-36-CR5wwO9D.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10481</h6>
                                                    <p class="text-muted">Visa • 8 min ago</p>
                                                </div>
                                            </div>
                                            <h6>₹3,980</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-37-J1EPP1im.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10480</h6>
                                                    <p class="text-muted">Cash payment • 15 min ago</p>
                                                </div>
                                            </div>
                                            <h6>₹860</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-38-Do2kmZ3c.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10479</h6>
                                                    <p class="text-muted">Mastercard • 32 min ago</p>
                                                </div>
                                            </div>
                                            <h6>₹1,720</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-12-CfsiEgBV.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10478</h6>
                                                    <p class="text-muted">UPI • 45 min ago</p>
                                                </div>
                                            </div>
                                            <h6>₹860</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-21-0wmBLMGI.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10477</h6>
                                                    <p class="text-muted">Cash Payment • 1 hr ago</p>
                                                </div>
                                            </div>
                                            <h6>₹3,980</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-6-BIO7_TUU.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10476</h6>
                                                    <p class="text-muted">Visa Card • 1 hr ago</p>
                                                </div>
                                            </div>
                                            <h6>₹2,150</h6>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-19-uC8d_L1u.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10475</h6>
                                                    <p class="text-muted">Wallet • Paytm • 2 hrs ago</p>
                                                </div>
                                            </div>
                                            <h6>₹5,260</h6>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-30-DOeFZApf.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10474</h6>
                                                    <p class="text-muted">UPI • 3 hrs ago</p>
                                                </div>
                                            </div>
                                            <h6>₹1,340</h6>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                                <img src="{{asset('/')}}website/assets/user-46-DHyUE9on.png" alt="User" class="size-10 rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-medium">#INV-10478</h6>
                                                    <p class="text-muted">Paytm • 1 hr ago</p>
                                                </div>
                                            </div>
                                            <h6>₹5,260</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <div class="card card-h-100">
                            <div class="card-header d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                <h6 class="card-title mb-0">Top Categories</h6>
                                <a href="#!" class="text-muted">View Details</a>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h3 class="mb-0 fs-2xl">345<span class="fs-15 fw-normal text-muted ms-2">Total Categories</span></h3>
                                </div>
                                <div class="row g-2 mb-7">
                                    <div class="col-5 col-md-6">
                                        <div class="progress progress-3 mb-3 rounded-1" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        <p class="text-muted fs-sm">Beverages</p>
                                        <h6 class="mb-0 fs-16 d-flex align-items-center fw-medium gap-2"><span class="size-1-5 bg-primary rounded-circle d-block"></span>70%</h6>
                                    </div>
                                    <div class="col-4">
                                        <div class="progress progress-3 mb-3 rounded-1" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary" style="width: 100%"></div>
                                        </div>
                                        <p class="text-muted fs-sm">Groceries</p>
                                        <h6 class="mb-0 fs-16 d-flex align-items-center fw-medium gap-2"><span class="size-1-5 bg-secondary rounded-circle d-block"></span>35%</h6>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <div class="progress progress-3 mb-3 rounded-1" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <p class="text-muted fs-sm">Snacks</p>
                                        <h6 class="mb-0 fs-16 d-flex align-items-center fw-medium gap-2"><span class="size-1-5 bg-success rounded-circle d-block"></span>15%</h6>
                                    </div>
                                </div>
                                <div class="px-4 mx-n4" data-simplebar style="max-height: 137px;">
                                    <div class="pb-4 mb-4 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between">
                                            <div class="size-11 avatar flex-shrink-0 bg-light rounded-1">
                                                <img src="{{asset('/')}}website/assets/img-10-DqnuMbAd.png" alt="Urban Runner Sneakers" class="img-fluid size-10">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <a href="#!" class="text-reset mb-1 d-block fw-medium">Beverages</a>
                                                <p class="text-muted text-truncate">Leading sales category with strong purchases</p>
                                            </div>
                                            <p class="flex-shrink-0">₹1.2L Revenue</p>
                                        </div>
                                    </div>
                                    <div class="pb-4 mb-4 border-bottom border-dashed">
                                        <div class="d-flex flex-wrap gap-3 justify-content-between">
                                            <div class="size-11 avatar flex-shrink-0 bg-light rounded-1">
                                                <img src="{{asset('/')}}website/assets/img-22-D2w1zjf6.png" alt="Urban Runner Sneakers" class="img-fluid size-10">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <a href="#!" class="text-reset mb-1 d-block fw-medium">Groceries</a>
                                                <p class="text-muted text-truncate">Stable daily demand across all outlets</p>
                                            </div>
                                            <p class="flex-shrink-0">₹78K Revenue</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex gap-3 justify-content-between">
                                            <div class="size-11 avatar flex-shrink-0 bg-light rounded-1">
                                                <img src="{{asset('/')}}website/assets/img-23-CLteivci.png" alt="Urban Runner Sneakers" class="img-fluid size-10">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <a href="#!" class="text-reset mb-1 d-block fw-medium">Snacks</a>
                                                <p class="text-muted text-truncate">High impulse purchases with peak evening demand</p>
                                            </div>
                                            <p class="flex-shrink-0">₹42K Revenue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-4 border-top">
                                <a href="apps-products-categories.html" class="link link-custom">View all categories <i data-lucide="chevron-right" class="size-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h6 class="card-title mb-0">Recent Orders</h6>
                                <a href="apps-orders-all.html" class="link link-custom-primary">View All <i class="ri-arrow-right-line"></i></a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-card table-responsive">
                                    <table class="table text-nowrap align-middle mb-0">
                                        <thead>
                                        <tr class="bg-light border-bottom">
                                            <th>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checAllData">
                                                </div>
                                            </th>
                                            <th class="fw-medium text-muted">Order ID</th>
                                            <th class="fw-medium text-muted">Date</th>
                                            <th class="fw-medium text-muted">Product</th>
                                            <th class="fw-medium text-muted">Customer</th>
                                            <th class="fw-medium text-muted">Items</th>
                                            <th class="fw-medium text-muted">Total Price</th>
                                            <th class="fw-medium text-muted">Payment Status</th>
                                            <th class="fw-medium text-muted">Quantity</th>
                                            <th class="fw-medium text-muted">Order Status</th>
                                            <th class="fw-medium text-muted">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checkData01">
                                                </div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1024</a></td>
                                            <td>Dec 19, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1">
                                                        <img src="{{asset('/')}}website/assets/img-01-BBWp8t8E.png" loading="lazy" alt="Product" class="img-fluid">
                                                    </div>
                                                    <a href="#!" class="text-reset fw-medium">Blouse top</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-10-CzpspsdB.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Emma White</a>
                                                </div>
                                            </td>
                                            <td>3</td>
                                            <td>
                                                <p class="fw-medium">$120.50</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Paid</span></td>
                                            <td>7</td>
                                            <td><span class="badge bg-warning-subtle text-warning border border-warning-subtle">Pending</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checkData02">
                                                </div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1025</a></td>
                                            <td>Dec 18, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1">
                                                        <img src="{{asset('/')}}website/assets/img-02-ClVfz9I5.png" loading="lazy" alt="Product" class="img-fluid">
                                                    </div>
                                                    <a href="#!" class="text-reset fw-medium">Summer Dress</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-11-bzS6tHsV.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Liam Johnson</a>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <p class="fw-medium">$85.00</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Paid</span></td>
                                            <td>2</td>
                                            <td><span class="badge bg-danger-subtle text-danger border border-danger-subtle">Failed</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checkData03">
                                                </div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1026</a></td>
                                            <td>Dec 17, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1">
                                                        <img src="{{asset('/')}}website/assets/img-03-oTTY_McP.png" loading="lazy" alt="Product" class="img-fluid">
                                                    </div>
                                                    <a href="#!" class="text-reset fw-medium">Casual Shirt</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-12-CfsiEgBV.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Olivia Brown</a>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <p class="fw-medium">$60.75</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Pending</span></td>
                                            <td>4</td>
                                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">Paid</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checkData04">
                                                </div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1027</a></td>
                                            <td>Dec 16, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1">
                                                        <img src="{{asset('/')}}website/assets/img-04-DZ4OtBxS.png" loading="lazy" alt="Product" class="img-fluid">
                                                    </div>
                                                    <a href="#!" class="text-reset fw-medium">Denim Jeans</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-13-NgroKY8u.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Noah Smith</a>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <p class="fw-medium">$150.00</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Failed</span></td>
                                            <td>1</td>
                                            <td><span class="badge bg-warning-subtle text-warning border border-warning-subtle">Pending</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary">
                                                    <input class="form-check-input" type="checkbox" id="checkData05">
                                                </div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1028</a></td>
                                            <td>Dec 15, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1">
                                                        <img src="{{asset('/')}}website/assets/img-05-DPzi-ptA.png" loading="lazy" alt="Product" class="img-fluid">
                                                    </div>
                                                    <a href="#!" class="text-reset fw-medium">Leather Jacket</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-14-BWimhkHc.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Sophia Lee</a>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <p class="fw-medium">$220.00</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Paid</span></td>
                                            <td>5</td>
                                            <td><span class="badge bg-warning-subtle text-warning border border-warning-subtle">Pending</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary"><input class="form-check-input" type="checkbox" id="checkData08"></div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1031</a></td>
                                            <td>Dec 12, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1"><img src="{{asset('/')}}website/assets/img-08-BXmGY-HZ.png" loading="lazy" alt="Product" class="img-fluid"></div>
                                                    <a href="#!" class="text-reset fw-medium">Sneakers</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-17-Y_OiPHJx.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Ethan Scott</a>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <p class="fw-medium">$120.00</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Paid</span></td>
                                            <td>2</td>
                                            <td><span class="badge bg-warning-subtle text-warning border border-warning-subtle">Pending</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check check-primary"><input class="form-check-input" type="checkbox" id="checkData09"></div>
                                            </td>
                                            <td><a href="#!" class="link link-custom-primary">#ORD1032</a></td>
                                            <td>Dec 11, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar size-10 border rounded-1 p-1"><img src="{{asset('/')}}website/assets/img-09-CqG2QIp1.png" loading="lazy" alt="Product" class="img-fluid"></div>
                                                    <a href="#!" class="text-reset fw-medium">Wool Sweater</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('/')}}website/assets/user-18-C5ehJukC.png" alt="User" class="size-10 rounded-circle img-fluid">
                                                    <a href="#!" class="text-reset d-block fw-medium">Isabella Adams</a>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <p class="fw-medium">$180.00</p>
                                            </td>
                                            <td><span class="badge bg-light text-muted border">Pending</span></td>
                                            <td>3</td>
                                            <td><span class="badge bg-success-subtle text-success border border-success-subtle">Paid</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-sub-primary size-8 btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button type="button" class="btn btn-sub-secondary size-8 btn-icon edit-btn"><i class="ri-edit-line"></i></button>
                                                    <button type="button" class="btn btn-sub-danger size-8 btn-icon delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row align-items-center g-3 mt-3">
                                    <div class="col-md-6">
                                        <p class="text-muted text-center text-md-start mb-0">Showing <b class="me-1">1-7</b> of <b class="ms-1">23</b> Results</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center justify-content-md-end mb-0 products-pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#"><i data-lucide="chevron-left" class="size-4"></i>Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next<i data-lucide="chevron-right" class="size-4"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
