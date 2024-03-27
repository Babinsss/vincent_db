{{-- tab title --}}
<title>View Gender</title>
{{-- html content --}}
@section('content')
<style>
    .container {
        padding: 5%
    }
</style>

<div class="wrapper">
    @include('include.sidebar')

<div class="container">
    <form class="row g-4" action="#" method="POST">
        <h2>View Gender</h2>
        <div class="row-md">
            <label for="gender" class="form-label"></label>
            <label for="text" class="form-control" id="gender" name="gender" valu="{{$gender->gender}}"></label>
        </div>
        <div class="col-12">
            <a href="/genders" class="btn-btn-danger">Back</a>
        </div>
    </form>
</div>