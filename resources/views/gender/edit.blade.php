@extends('layout.main')

@section('title')
    Edit Gender
@endsection

@section('content')
    <div class="wrapper">
        @include('include.sidebar')

        <div class="card col-sm-6 m-auto mx-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Gender</h5>
                <form action="/gender/update/{{ $gender->gender_id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="gender" class="form-label" >Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender"
                            value="{{ $gender->gender }}" />
                    </div>
                    <div class="d-flex gap-1 justify-content-end">
                        <button type="submit" class="btn btn-success col-sm-3 float-end">Save Gender</button>
                        <a href="/genders" class="btn btn-secondary col-sm-3 float-end">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
