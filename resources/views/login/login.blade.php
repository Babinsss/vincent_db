<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="{{ asset('images/cpc.ico') }}" type="image/x-icon">

    <!-- Add Bootstrap CSS for responsive design -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Add custom CSS for modern look -->
    <style>
        body {
            /* Replace 'background.jpg' with your image file */
            background: url('images/cpc.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 500px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            /* Added box shadow */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Center vertically on the page */
        }

        .card-header {
            border-bottom: none;
            /* Remove border at the bottom of header */
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #007bff;
            /* Set header background color */
        }

        .form-check-label {
            color: #555;
            /* Change color of Remember Me text */
        }
    </style>
</head>

<body>
    @extends('layout.main')

    @section('content')
        <div class="container">
            <div class="card rounded">
                <div class="card-header bg-primary text-white text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email_address"
                                class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-8">
                                <input id="email_address" type="email"
                                    class="form-control @error('email_address') is-invalid @enderror" name="email_address"
                                    value="{{ old('email_address') }}" required autocomplete="email" autofocus>
                                @error('email_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
