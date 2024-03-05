@extends('layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Content -->
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Add User</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        @foreach ([
                        'firstname' => 'First Name',
                        'middlename' => 'Middle Name',
                        'lastname' => 'Last Name',
                        'suffix' => 'Suffix',
                        'birthdate' => 'Birthdate',
                        'gender' => 'Gender',
                        'address' => 'Address',
                        'contact_number' => 'Contact Number',
                        'email' => 'Email',
                        'username' => 'Username',
                        'password' => 'Password',
                        ] as $field => $label)
                        <div class="form-group row">
                            <label for="{{ $field }}" class="col-sm-4 col-form-label text-md-right">{{ $label }}</label>
                            <div class="col-sm-8">
                                @if ($field === 'birthdate')
                                <input id="{{ $field }}" type="date" class="form-control @error($field) is-invalid @enderror" name="{{ $field }}" value="{{ old($field) }}" required autocomplete="{{ $field }}">
                                @else
                                <input id="{{ $field }}" type="{{ $field === 'password' ? 'password' : 'text' }}" class="form-control @error($field) is-invalid @enderror" name="{{ $field }}" value="{{ old($field) }}" @if ($field==='password' ) required autocomplete="new-password" @else autocomplete="{{ $field }}" @endif>
                                @endif
                                @error($field)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-sm-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-8 offset-sm-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Add User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection