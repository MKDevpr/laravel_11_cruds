@extends('layouts.app')

@section('title', 'Welcome - Student Portal')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body text-center p-5">
                <h1 class="display-4 mb-4">Welcome to Student Laravel CRUD</h1>
                <p class="lead mb-5">Your one STOP for your Laravel CRUD</p>

               
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('student.login') }}" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </a>
                    <a href="{{ route('student.register') }}" class="btn btn-outline-primary">
                        <i class="bi bi-person-plus me-2"></i>Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
