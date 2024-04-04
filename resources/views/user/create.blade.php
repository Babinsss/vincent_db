@extends('layout.main')

@section('content')
    <div class="wrapper">
        @include('include.sidebar')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8"> <!-- Reduced column width for better form alignment -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Add User</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/user/store" enctype="multipart/form-data" id="userForm"
                                class="needs-validation" novalidate>
                                @csrf <!-- Automatically generates CSRF token input field -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input id="first_name" type="text" class="form-control" name="first_name"
                                                required autofocus>
                                            <div class="invalid-feedback">
                                                Please provide a first name.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input id="middle_name" type="text" class="form-control" name="middle_name"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a middle name.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a last name.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="suffix_name">Suffix</label>
                                            <input id="suffix_name" type="text" class="form-control" name="suffix_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="birth_date">Birthdate</label>
                                            <input id="birth_date" type="date" class="form-control" name="birth_date"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a valid birthdate.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gender_id">Gender</label>
                                            <select id="gender_id" class="form-control" name="gender_id" required>
                                                <option selected>Select Gender</option>
                                                @foreach ($genders as $gender)
                                                    <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a gender.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control" name="address" required>
                                    <div class="invalid-feedback">
                                        Please provide an address.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input id="contact_number" type="tel" class="form-control" name="contact_number"
                                        required>
                                    <div class="invalid-feedback">
                                        Please provide a valid contact number.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email_address">Email</label>
                                    <input id="email_address" type="email" class="form-control" name="email_address" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">
                                        Please provide a username.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        Please confirm your password.
                                    </div>
                                </div>

                                <div class="form-group">
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
