@extends('layout.main')

@section('content')

<div class="wrapper">
    @include('include.sidebar')

    <div class='container'>

        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">List of Users</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <a href="/user/create" class="btn btn-primary">Add User</a>
                    </table>
                    <table class="table table-bordered table-striped">
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
                            @foreach($users as $user)
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
                                        <a href="/user/edit/{{$user->user_id}}" class="btn btn-danger">Edit</a>
                                        <a href="{{ route('confirmDelete', ['user_id' => $user->user_id]) }}" class="btn btn-secondary">Delete</a>
                                    </div>
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

@endsection
