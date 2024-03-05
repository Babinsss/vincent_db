<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored User Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">User Information</div>
            <div class="card-body">
                <h5 class="card-title">User Details</h5>
                <p class="card-text">First Name: {{ $user->firstname }}</p>
                <p class="card-text">Middle Name: {{ $user->middlename }}</p>
                <p class="card-text">Last Name: {{ $user->lastname }}</p>
                <p class="card-text">Suffix: {{ $user->suffix }}</p>
                <p class="card-text">Birthdate: {{ $user->birthdate }}</p>
                <p class="card-text">Gender: {{ $user->gender }}</p>
                <p class="card-text">Address: {{ $user->address }}</p>
                <p class="card-text">Contact Number: {{ $user->contact_number }}</p>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Username: {{ $user->username }}</p>
                <!-- You can display more user information here as needed -->
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>