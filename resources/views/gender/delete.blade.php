@extends('layout.main')

@section('title')
    Delete Gender
@endsection

@section('content')
    <div class="wrapper">
        @include('include.sidebar')

        <div class="card m-auto">
            <div class="card-body">
                <h5 class="card-title">Delete Gender</h5>
                <form action="/gender/destroy/{{ $gender->gender_id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="gender" name="gender"
                            value="{{ $gender->gender }}" />
                    </div>
                    <div class="d-flex gap-1">
                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                        <a href="/genders" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
