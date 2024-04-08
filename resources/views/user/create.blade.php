<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
</head>
<body>
    
</body>
</html>
@extends('layout.main')

@section('content')
<div class="wrapper">
    @include('include.sidebar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Add User</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/user/store" enctype="multipart/form-data" id="userForm"
                            class="needs-validation" novalidate>
                            @csrf <!-- Automatically generates CSRF token input field -->

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Please provide a first name.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="middle_name" class="form-label">Middle Name</label>
                                    <input id="middle_name" type="text" class="form-control" name="middle_name" required>
                                    <div class="invalid-feedback">
                                        Please provide a middle name.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input id="last_name" type="text" class="form-control" name="last_name" required>
                                    <div class="invalid-feedback">
                                        Please provide a last name.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="suffix_name" class="form-label">Suffix</label>
                                    <input id="suffix_name" type="text" class="form-control" name="suffix_name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="birth_date" class="form-label">Birthdate</label>
                                    <input id="birth_date" type="date" class="form-control" name="birth_date" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid birthdate.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender_id" class="form-label">Gender</label>
                                    <select id="gender_id" class="form-select" name="gender_id" required>
                                        <option selected disabled>Select Gender</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a gender.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea id="address" class="form-control" name="address" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Please provide an address.
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="contact_number" class="form-label">Contact Number</label>
                                    <input id="contact_number" type="tel" class="form-control" name="contact_number" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid contact number.
                                    </div>
                                </div>

                                <!-- Add other form fields with similar structure -->

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email_address" class="form-label">Email</label>
                                    <input id="email_address" type="email" class="form-control" name="email_address" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">
                                        Please provide a username.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        Please confirm your password.
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
