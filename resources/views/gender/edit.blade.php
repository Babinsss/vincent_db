<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Gender</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
</head>
<body>
    
</body>
</html>
@extends('layout.main')

@section('title', 'Edit Gender')

@section('content')
<div class="wrapper">
    @include('include.sidebar')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Edit Gender</h5>
                        <form action="/gender/update/{{ $gender->gender_id }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" value="{{ $gender->gender }}">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success me-2">Save Gender</button>
                                <a href="/genders" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
