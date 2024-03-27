    @extends('layout.main')
    @section('content')
    <div class="wrapper">
    @include('include.sidebar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Add User</div>
                    <div class="card-body">
                        <form method="POST" action="/store" enctype="multipart/form-data" id="userForm" class="needs-validation" novalidate>
                            @csrf <!-- Automatically generates CSRF token input field -->
                            <div class="row">
                                <!-- First Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="firstname">First Name</label>
                                    <input id="firstname" type="text" class="form-control" name="firstname" required autofocus>
                                    <div class="invalid-feedback">
                                        Please provide a first name.
                                    </div>
                                </div>

                                <!-- Middle Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="middlename">Middle Name</label>
                                    <input id="middlename" type="text" class="form-control" name="middlename" required>
                                    <div class="invalid-feedback">
                                        Please provide a middle name.
                                    </div>
                                </div>

                                <!-- Last Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="lastname">Last Name</label>
                                    <input id="lastname" type="text" class="form-control" name="lastname" required>
                                    <div class="invalid-feedback">
                                        Please provide a last name.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Suffix Field -->
                                <div class="form-group col-md-4">
                                    <label for="suffix">Suffix</label>
                                    <input id="suffix" type="text" class="form-control" name="suffix">
                                </div>

                                <!-- Birthdate Field -->
                                <div class="form-group col-md-4">
                                    <label for="birthdate">Birthdate</label>
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid birthdate.
                                    </div>
                                </div>

                                <!-- Gender Field -->
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a gender.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Address Field -->
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control" name="address" required>
                                    <div class="invalid-feedback">
                                        Please provide an address.
                                    </div>
                                </div>

                                <!-- Contact Number Field -->
                                <div class="form-group col-md-6">
                                    <label for="contact_number">Contact Number</label>
                                    <input id="contact_number" type="tel" class="form-control" name="contact_number" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid contact number.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email Field -->
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>

                                <!-- Username Field -->
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">
                                        Please provide a username.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Password Field -->
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="form-group col-md-6">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        Please confirm your password.
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection57