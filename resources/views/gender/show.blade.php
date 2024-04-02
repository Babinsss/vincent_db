@extends('layout.main')

{{-- tab title --}}
@section('title')
    View Gender
@endsection

{{-- html content --}}
@section('content')
    <style>
        .container {
            padding: 5%
        }
    </style>

    <div class="wrapper">
        @include('include.sidebar')

        <div class="card m-auto">
            <div class="card-body">
                <h5 class="card-title">View Gender</h5>
                <div class="row-md">
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $gender->gender }}"
                        disabled>
                </div>
                <div class="col-12 mt-3">
                    <a href="/genders" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
