<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Information</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@extends('layout.main')

@section('content')
<div class="wrapper">
    @include('include.sidebar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Update User Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateUser', $user->user_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="middle_name" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="suffix_name" class="form-label">Suffix Name</label>
                                    <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{ $user->suffix_name }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $user->birth_date }}">
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">Gender</label>
                                <select class="form-select" id="gender_id" name="gender_id">
                                    <option value="1" {{ $user->gender_id == 1 ? 'selected' : '' }}>Male</option>
                                    <option value="2" {{ $user->gender_id == 2 ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email_address" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email_address" name="email_address" value="{{ $user->email_address }}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="/user" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
