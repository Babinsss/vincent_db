@extends('layout.main')

@section('content')
    <div class="wrapper">
        @include('include.sidebar')

        <div class="p-5 container border rounded m-5">
            <h1>List of Genders</h1>
            <a href="/gender/create" class="btn btn-success mb-3">Add Gender</a>
            @include('include.messages')
            <table class="table">
                <thead>
                    <tr>
                        <th>Gender</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genders as $gender)
                        <tr>
                            <td>{{ $gender->gender }}</td>
                            <td>{{ $gender->created_at }}</td>
                            <td>{{ $gender->updated_at }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="/gender/view/{{ $gender->gender_id }}" class="btn btn-primary">View</a>
                                    <a href="/gender/edit/{{ $gender->gender_id }}" class="btn btn-warning">Edit</a>
                                    <a href="/gender/delete/{{ $gender->gender_id }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
