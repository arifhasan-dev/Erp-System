@extends('website.master')

@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <h2>Edit Staff</h2>

                <form action="{{ route('users.update',$user) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{old('name',$user->name)}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{old('email',$user->email)}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Role</label>

                        <select name="role" class="form-select">

                            <option value="">Select Role</option>

                            @foreach($roles as $role)

                                @if($role->name !== 'Super Admin')
                                    <option value="{{ $role->name }}" {{$user->hasRole($role->name) ? 'selected' : ''}}>
                                        {{ $role->name }}
                                    </option>
                                @endif

                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select">
                            <option value="1"{{$user->status ? 'selected' : ''}}>Active</option>
                            <option value="0"{{! $user->status ? 'selected' : ''}}>Inactive</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">
                        Save Staff
                    </button>

                </form>

            </div>

@endsection

