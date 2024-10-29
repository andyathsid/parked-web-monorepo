@extends('Login.layout')

@section('login-content')
    <div class="container register-container">
        <div class="card">
            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-container"></div>
                </div>
                <div class="col-lg-6">
                    <div class="card-header">
                        <h2 class="mb-0 fw-bold">Create Account</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.submit') }}" method="POST" id="registerForm">
                            @csrf
                            <div class="mb-4">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                                @error('first_name')
                                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="last_name" required>
                                @error('last_name')
                                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                @error('email')
                                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="invalid-feedback">
                                    Password does not meet the requirements.
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" required>
                                <div class="invalid-feedback">
                                    Passwords do not match.
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="password-requirements">
                                    Password must contain at least 8 characters, including one uppercase letter, one
                                    number, and one symbol.
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="password-toggle form-check">
                                    <input class="form-check-input" type="checkbox" id="showPassword"
                                        onchange="togglePasswordVisibility(this.checked)">
                                    <label class="form-check-label" for="showPassword">
                                        Show password
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning btn-register fw-bold">Register</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Already have an account? <a href="/login" class="fw-bold">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
