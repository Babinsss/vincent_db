@extends('layout.main')

@section('content')
<div class="wrapper">
    @include('include.sidebar')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title">User Details</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>First Name:</strong> {{ $user->first_name }}</p>
                <p class="card-text"><strong>Middle Name:</strong> {{ $user->middle_name }}</p>
                <p class="card-text"><strong>Last Name:</strong> {{ $user->last_name }}</p>
                <p class="card-text"><strong>Suffix Name:</strong> {{ $user->suffix_name }}</p>
                <p class="card-text"><strong>Birthday:</strong> {{ $user->birth_date }}</p>
                <p class="card-text"><strong>Gender:</strong> {{ $user->gender_id }}</p>
                <p class="card-text"><strong>Email Address:</strong> {{ $user->email_address }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
