@extends('layout.main')

@section('content')

<div class="wrapper">
    @include('include.sidebar')

<div class="p-5 container border rounded mt-5">
    <h1>List of Genders</h1>
    <a href="/gender/create" class="btn btn-primary">Add Gender</a>
    @include('include.messages')
    <table class="table">
        <thead>
            <tr>
                <td>Gender</td>
                <td>Created At</td>
                <td>Updated At</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($genders as $gender)
            <tr>
                <td>{{$gender->gender}}</td>
                <td>{{$gender->created_at}}</td>
                <td>{{$gender->updated_at}}</td>
            </tr>               
            @endforeach
        </tbody>
    </table>
</div>
@endsection