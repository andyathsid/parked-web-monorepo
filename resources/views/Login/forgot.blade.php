@extends('Login.layout')

@section('login-content')
    <div class="container forgot-password-container">
        <div class="card">
            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-container"></div>
                </div>
                <div class="col-lg-6">
                    <div class="card-header">
                        <h2 class="mb-0 fw-bold">Forgot Password</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Enter your email address and we'll send you a link to reset your password.</p>
                        <form id="forgotPasswordForm">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning btn-reset fw-bold">Reset Password</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Remember your password? <a href="login.html" class="fw-bold">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
