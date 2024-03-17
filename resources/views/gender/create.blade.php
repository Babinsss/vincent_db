@extends('layout.main')
@extends('include.sidebar')
@section('title', 'Add Gender')

@section('content')
<style>
    .container {
        padding: 5%;
    }
</style>

<div class="wrapper">
    <div class="container">
        <h2>Add Gender</h2>
        <form class="row g-4 col-md" action="/gender/store" method="POST">
            @csrf
            <div class="row-md">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>
            <div class="col-12">
                <a href="/user" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
