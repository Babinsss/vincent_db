@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">List of Users</h5>
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
                            <!-- Add actions buttons here -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection