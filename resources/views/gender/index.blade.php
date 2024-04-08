<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Genders</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
</head>
<body>
    
</body>
</html>
@extends('layout.main')

@section('content')
<div class="wrapper">
    @include('include.sidebar')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title mb-0">List of Genders</h2>
                    </div>
                    <div class="card-body">
                        @include('include.messages')
                        <a href="/gender/create" class="btn btn-success mb-3">Add Gender</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Gender</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($genders as $gender)
                                    <tr>
                                        <td>{{ $gender->gender }}</td>
                                        <td>{{ $gender->created_at->format('M d, Y H:i:s') }}</td>
                                        <td>{{ $gender->updated_at->format('M d, Y H:i:s') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="/gender/view/{{ $gender->gender_id }}" class="btn btn-primary">View</a>
                                                <a href="/gender/edit/{{ $gender->gender_id }}" class="btn btn-warning">Edit</a>
                                                <a href="/gender/delete/{{ $gender->gender_id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gender?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No genders found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
