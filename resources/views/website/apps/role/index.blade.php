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
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <label for="searchProductInput" class="form-label d-none">Search</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-9" id="searchProductInput" placeholder="Search for...">
                                            <i data-lucide="search" class="size-4 icon-dark position-absolute top-50 start-0 ms-3 translate-middle-y"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 flex-wrap ms-auto flex-md-nowrap">
                                        <div id="Categories" class="min-w-44"></div>
                                        <div id="Status"></div>
                                        <a href="{{route('roles.create')}}" class="btn btn-primary">Add Role</a>                                </div>
                                </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-card table-responsive">
                                        <table class="table align-middle text-nowrap mb-0">
                                            <thead>
                                            <tr class="bg-light border-bottom">
                                                <th>
                                                    <div class="form-check check-primary">
                                                        <input class="form-check-input" type="checkbox" aria-label="checkbox" id="checAllData">
                                                        <label class="form-check-label d-none" for="checAllData">Check All Data</label>
                                                    </div>
                                                </th>
                                                <th class="fw-medium text-muted">Role ID</th>
                                                <th class="fw-medium text-muted">Role Name</th>
                                                <th class="fw-medium text-muted">Action</th>
                                            </tr>
                                            </thead>
                                            @foreach($roles as $role)
                                                <tbody id="variantTableBody">
                                                <td>
                                                    <div class="form-check check-primary">
                                                        <input class="form-check-input" type="checkbox" aria-label="checkbox" id="checAllData">
                                                        <label class="form-check-label d-none" for="checAllData">Check All Data</label>
                                                    </div>
                                                </td>
                                                <td>{{$role->id}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>
                                                    @if($role->name !== 'Super Admin')
                                                    <a href="{{route('roles.edit',$role->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                    @endif
                                                    <a href="{{route('roles.permission',$role)}}" class="btn  btn-sm btn-indigo">Permission</a>
                                                    @if($role->name !== 'Super Admin')
                                                    <form action="{{route('roles.destroy',$role->id)}}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </button>
                                                    </form>
                                                    @endif
                                                </td>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="row align-items-center g-3 mt-2">
                                        <div class="col-md-6">
                                            <p class="text-muted text-center text-md-start mb-0" id="paginationInfo">
                                                Showing <b class="me-1">1-0</b> of <b class="ms-1">0</b> Results
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center justify-content-md-end mb-0" id="pagination">
                                                    <!-- Pagination will be dynamically added here -->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add/Edit Category Modal -->


                <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xs">
                            <div class="modal-content p-7 text-center">
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="size-14 bg-danger-subtle rounded-circle d-flex align-items-center justify-content-center size-16">
                                        <i class="ri-delete-bin-line text-danger fs-2xl"></i>
                                    </div>
                                </div>
                                <h5 class="mb-4 lh-base">Are you sure you want to delete this Category?</h5>
                                <input type="hidden" id="deleteCategoryId">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                    <button type="button" class="btn btn-link text-reset" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

    @endsection

