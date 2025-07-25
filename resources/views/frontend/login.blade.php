@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Login Section -->
    <section class="py-5 bg-gradient-soft min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="login-card bg-white rounded-3 shadow-sm p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary mb-2">Welcome Back!</h2>
                            <p class="text-muted">Sign in to your BabyBloom account</p>
                        </div>

                        <!-- Login Form -->
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password" required>
                                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                                        <i class="fas fa-eye" id="passwordToggle"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#forgotPasswordModal">
                                    Forgot Password?
                                </a>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill mb-4">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>
                        </form>

                        <!-- Social Login -->
                        <div class="text-center mb-4">
                            <p class="text-muted mb-3">Or sign in with</p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-danger rounded-pill">
                                    <i class="fab fa-google me-2"></i>Continue with Google
                                </button>
                                <button class="btn btn-outline-primary rounded-pill">
                                    <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                                </button>
                            </div>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-muted mb-0">
                                Don't have an account?
                                <a href="register.html" class="text-decoration-none fw-bold">Create Account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold text-primary">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-4">Enter your email address and we'll send you a link to reset your password.
                    </p>
                    <form id="forgotPasswordForm">
                        <div class="mb-3">
                            <label for="resetEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="resetEmail" placeholder="Enter your email"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">
                            Send Reset Link
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
