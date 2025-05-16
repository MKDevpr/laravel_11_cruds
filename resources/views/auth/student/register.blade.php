@extends('layouts.app')

@section('title', 'Student Registration - Student Portal')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <h2 class="h3">
                        <i class="bi bi-mortarboard-fill text-primary me-2"></i>Student Registration
                    </h2>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('student.register') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-badge"></i>
                            </span>
                            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-text">
                            <ul class="mb-0">
                                <li>At least 8 characters long</li>
                                <li>Contains at least one uppercase letter</li>
                                <li>Contains at least one number</li>
                                <li>Contains at least one special character</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a>
                        </label>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-person-plus me-2"></i>Register
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="mb-2">
                            Already have an account? 
                            <a href="{{ route('student.login') }}" class="text-decoration-none">Login here</a>
                        </p>
                        <a href="{{ url('/') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left me-1"></i>Back to Home
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 