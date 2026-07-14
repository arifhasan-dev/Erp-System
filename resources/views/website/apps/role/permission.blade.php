@extends('website.master')

@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <h2>Permission Page</h2>

                <h4>Role : {{ $role->name }}</h4>

                <hr>

                <form action="#" method="POST">
                    @csrf

                    <div class="row">

                        @foreach($permissions as $permission)

                            <div class="col-md-4 mb-3">
                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="permissions[]"
                                        value="{{ $permission->name }}"
                                        id="permission{{ $permission->id }}"
                                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                           for="permission{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>

                                </div>
                            </div>

                        @endforeach

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Save Permissions
                    </button>

                </form>

@endsection
