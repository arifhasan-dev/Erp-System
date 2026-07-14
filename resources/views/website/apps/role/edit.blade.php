@extends('website.master')

@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="gap-2 page-heading mb-3 flex-column flex-md-row">
                    <h6 class="flex-grow-1 mb-0">Roles</h6>
                    <ul class="breadcrumb flex-shrink-0 mb-0">
                        <li class="breadcrumb-item"><a href="#!">Staff</a></li>
                        <li class="breadcrumb-item active">Role</li>
                    </ul>
                    <a href="{{route('roles.index')}}" class="btn btn-primary">Manage Role</a>
                </div>

                <div>
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h6 class="modal-title">Add Role</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <form method="POST" action="{{ route('roles.update',$role->id) }}" id="addRoleForm">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-4">

                                        <div class="col-12">
                                            <label for="roleName" class="form-label">
                                                Role Name <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                type="text" id="roleName" name="name"  class="form-control"
                                                value="{{$role->name}}" placeholder="e.g. Sales Manager" required>
                                        </div>

                                    </div>

                                    <div class="d-flex gap-3 mt-4">
                                        <button type="button" class="btn btn-light w-50" data-bs-dismiss="modal">
                                            Cancel
                                        </button>

                                        <button type="submit" class="btn btn-primary w-50">
                                            Update Role
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

