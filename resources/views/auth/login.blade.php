@extends('layouts.app')

@section('content')

<style>
    /* Custom styles */
    .container {
        height: 100vh; /* Full viewport height */
        display: flex; /* Use flexbox */
        justify-content: center; /* Center items horizontally */
        align-items: center; /* Center items vertically */
    }
    .card {
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
    }
    .card-header {
        font-weight: bold; /* Bold header text */
        background-color: #007bff; /* Blue background */
        color: white; /* White text */
    }
    .form-label {
        font-size: 16px; /* Increase form label size */
    }
    .form-control {
        border-radius: 5px; /* Rounded corners */
        padding: 10px; /* Add padding */
        margin-bottom: 10px; /* Add margin between form elements */
    }
    .btn-primary {
        background-color: #007bff; /* Blue button */
        border: none; /* Remove border */
        border-radius: 5px; /* Rounded corners */
        padding: 10px 15px; /* Add padding */
        transition: background-color 0.3s ease; /* Smooth hover transition */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
