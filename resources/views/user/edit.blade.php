@extends('layout.main')

@section('content')
<div class="wrapper">
    @include('include.sidebar')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update User Information</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('updateUser', $user->user_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="suffix_name">Suffix Name</label>
                                <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{ $user->suffix_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birthday</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $user->birth_date }}">
                    </div>
                    <div class="form-group">
                        <label for="gender_id">Gender</label>
                        <select class="form-control" id="gender_id" name="gender_id">
                            <option value="1" {{ $user->gender_id == 1 ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ $user->gender_id == 2 ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="email" class="form-control" id="email_address" name="email_address" value="{{ $user->email_address }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/user" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
