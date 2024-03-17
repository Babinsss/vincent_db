@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-3">
            <!-- Sidebar content goes here -->
            Sidebar Content
        </aside>

        <!-- Main Content -->
        <main class="col-md-9">
            <div class="col-sm-8 mx-auto">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">List of Genders</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Gender</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Male</td>
                                        <td>2024-03-05</td>
                                        <td>2024-03-05</td>
                                    </tr>
                                    <tr>
                                        <td>Female</td>
                                        <td>2024-03-06</td>
                                        <td>2024-03-06</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
