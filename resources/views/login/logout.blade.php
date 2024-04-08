@extends('layout.main')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow rounded">
                <div class="card-header bg-primary text-white">{{ __('Logout') }}</div>

                <div class="card-body">
                    <p class="text-center">Are you sure you want to logout?</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('logout') }}" class="btn btn-danger me-2"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Yes, Logout') }}
                        </a>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">No, Go Back</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
