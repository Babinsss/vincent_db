<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Gender</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">
</head>
<body>
    
</body>
</html>
@extends('layout.main')

@section('title', 'Add Gender')

@section('content')
<div class="wrapper">
    @include('include.sidebar')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title mb-0">Add Gender</h2>
                    </div>
                    <div class="card-body">
                        <form action="/gender/store" method="POST" id="genderForm">
                            @csrf
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" required>
                                <div class="invalid-feedback">
                                    Please enter a gender.
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="/genders" class="btn btn-danger mr-2">Back</a>
                                <button type="submit" class="btn btn-primary">Add Gender</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
