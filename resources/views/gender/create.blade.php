<title>Add Gender</title>
@extends('layout.main')
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
                <a href="/genders" class="btn btn-danger">Back to Users</a>
                <button type="submit" class="btn btn-primary">Add Gender</button>
            </div>
        </form>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection
