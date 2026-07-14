@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Brands</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Brands</li>
                    </ul>
                    <a href="{{route('brands.create')}}" class="btn btn-primary mx-auto">Add Brand</a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body pt-0">
                                <div class="tab-content" id="brand-tabContent">
                                    <div class="tab-pane fade show active" id="pane-all-brands" role="tabpanel" aria-labelledby="tab-all-brands" tabindex="0">
                                        <div class="table-card table-responsive">
                                            <table class="table table-borderless align-middle text-nowrap mb-0">
                                                <thead>
                                                <tr class="border-bottom">
                                                    <th class="fw-medium text-muted">Sl No</th>
                                                    <th class="fw-medium text-muted">Category ID</th>
                                                    <th class="fw-medium text-muted">Brand Name</th>
                                                    <th class="fw-medium text-muted">Brand Code</th>
                                                    <th class="fw-medium text-muted">Image</th>
                                                    <th class="fw-medium text-muted">Status</th>
                                                    <th class="fw-medium text-muted">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($brands as $brand)
                                                <tr data-status="active" data-pos="1" data-web="1">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$brand->category_id}}</td>
                                                    <td>{{$brand->name}}</td>
                                                    <td>{{$brand->code}}</td>
                                                    <td><img src="{{asset('storage/'.$brand->image)}}" alt="" height="50px"></td>
                                                    <td class="badge bg-success btn-sm mt-3">{{$brand->status == 1 ? 'Active' : 'Inactive'}}</td>
                                                    <td>
                                                        <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{route('brands.destroy',$brand->id)}}" method="post" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-indigo btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
