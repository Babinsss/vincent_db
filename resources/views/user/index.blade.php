@extends('layout.main')

@section('content')

<div class="wrapper">
    @include('include.sidebar')

    <div class='container mt-3'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">List of Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Suffix Name</th>
                                        <th>Birthday</th>
                                        <th>Gender</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->middle_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->suffix_name }}</td>
                                        <td>{{ $user->birth_date }}</td>
                                        <td>{{ $user->gender_id }}</td>
                                        <td>{{ $user->email_address }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="/user/view/{{$user->user_id}}" class="btn btn-primary">View</a>
                                                <a href="/user/edit/{{$user->user_id}}" class="btn btn-info">Edit</a>
                                                <form action="{{ route('deleteUser') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No users found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="/user/create" class="btn btn-primary">Add User</a>
            </div>
        </div>
    </div>
</div>

@endsection
