@extends('website.master')

@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

        <h2>Add Staff</h2>

        <form action="{{ route('users.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="mb-3">
                <label>Role</label>

                <select name="role" class="form-select">

                    <option value="">Select Role</option>

                    @foreach($roles as $role)

                        @if($role->name !== 'Super Admin')
                            <option value="{{ $role->name }}">
                                {{ $role->name }}
                            </option>
                        @endif

                    @endforeach

                </select>

            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <button class="btn btn-primary">
                Save Staff
            </button>

        </form>

    </div>

@endsection
