@extends('layout.main')

@section('title')
    Add Gender
@endsection

@section('content')
<style>
    .container {
        padding: 5%;
    }
</style>
<div class="wrapper">
    @include('include.sidebar')
    <div class="container">
        <h2>Add Gender</h2>
        <form class="row g-4 col-md" action="/gender/store" method="POST" id="genderForm">
            @csrf
            <div class="row-md">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
                <div class="invalid-feedback">
                    Please enter a gender.
                </div>
            </div>
            <div class="col-12">
                <a href="/genders" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Add Gender</button>
            </div>
        </form>
    </div>
</div>
@endsection
