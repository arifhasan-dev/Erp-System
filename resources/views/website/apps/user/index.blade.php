@extends('website.master')

@section('body')
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">

                <h2>Staff List</h2>

                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($users as $user)

                        <tr>

                            <td>{{ $user->id }}</td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>
                                {{ $user->getRoleNames()->implode(', ') }}
                            </td>
                            <td>
                                @if($user->status)
                                    <span class="badge bg-success"><i class="ri-checkbox-circle-line"></i>Active</span>
                                @else
                                    <span class="badge bg-danger"><i class="ri-close-circle-line"></i>Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('users.edit',$user)}}" class="btn btn-sm btn-indigo">Edit</a>

                                <form action="{{ route('users.destroy', $user) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>

                                </form>
                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

@endsection
