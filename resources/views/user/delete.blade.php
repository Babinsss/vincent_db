@extends('layout.main')

@section('content')

<div class="wrapper">
    @include('include.sidebar')

    <div class='container'>

        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Delete User</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Confirm Deletion</h5>
                <p class="card-text">Are you sure you want to delete this user?</p>
                <form action="{{ route('deleteUser', ['user_id' => $user->user_id]) }}" method="post">
                    @csrf
                    <!-- Hidden input to send user ID for deletion -->
                    <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                    <!-- Delete button -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <!-- Cancel button (optional) -->
                    <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
