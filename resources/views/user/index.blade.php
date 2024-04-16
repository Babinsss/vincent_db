<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Students</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom styles can be added here */
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@extends('layout.main')

@section('content')

<div class="wrapper">
    @include('include.sidebar')

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">List of Users</h5>
                            <a href="/create" class="btn btn-primary">Add User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Search form -->
                        <form action="{{ route('index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search Users" value="{{ $search }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
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
                                        <td>
                                            @if ($user->gender)
                                                {{ $user->gender->gender }}
                                            @else
                                                No Gender Assigned
                                            @endif
                                        </td>
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
                        <!-- Pagination links -->
                        <div class="d-flex justify-content-center">
                            {{ $users->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

