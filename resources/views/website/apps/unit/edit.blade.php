@extends('website.master')
@section('body')
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Units</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        <li class="breadcrumb-item active">Units</li>
                    </ul>
                </div>
                <!-- Add/Edit Unit Modal -->
                <div>
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="addUnitModalLabel">Edit Unit</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('units.update',$unit->id)}}" method="post" >
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="unitName" class="form-label">Unit Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{$unit->name}}" id="unitName" placeholder="e.g., Kilogram" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="unitType" class="form-label">Short Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="short_name" value="{{$unit->short_name}}" id="unitType" placeholder="e.g., Weight" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="unitCode" class="form-label">Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" value="{{$unit->code}}" id="unitCode" placeholder="e.g., KG" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="unitStatus"  class="form-label">Status</label>
                                        <select name="status" class="form-select">
                                            <option value="">--select option --</option>
                                            <option value="1" {{old('status',$unit->status) == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{old('status',$unit->status) == 0 ? 'selected' : ''}}>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-2 mt-7">
                                        <a href="{{route('units.index')}}" class="btn btn-light w-100">Close</a>
                                        <button type="submit" class="btn btn-primary w-100" id="saveUnitBtn">update Unit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

