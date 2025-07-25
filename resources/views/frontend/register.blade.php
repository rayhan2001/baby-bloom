@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <section class="py-5 bg-gradient-soft min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="register-card bg-white rounded-3 shadow-sm p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary mb-2">Create Account</h2>
                            <p class="text-muted">Join BabyBloom family today</p>
                        </div>

                        <form class="register-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" required>
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('password', 'toggleIcon1')">
                                        <i class="fas fa-eye" id="toggleIcon1"></i>
                                    </button>
                                </div>
                                <div class="form-text">Password must be at least 8 characters long</div>
                            </div>

                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                                        <i class="fas fa-eye" id="toggleIcon2"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="birthDate" class="form-label">Date of Birth (Optional)</label>
                                <input type="date" class="form-control" id="birthDate">
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender (Optional)</label>
                                <select class="form-select" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="other">Other</option>
                                    <option value="prefer-not-to-say">Prefer not to say</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-decoration-none">Terms of Service</a>
                                        and
                                        <a href="#" class="text-decoration-none">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter for baby care tips and exclusive offers
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg rounded-pill w-100 mb-3">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>

                            <div class="text-center">
                                <span class="text-muted">Already have an account? </span>
                                <a href="login.html" class="text-decoration-none fw-bold">Sign In</a>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="social-login">
                            <div class="text-center mb-3">
                                <small class="text-muted">Or sign up with</small>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100 rounded-pill">
                                        <i class="fab fa-google me-2"></i>Google
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100 rounded-pill">
                                        <i class="fab fa-facebook-f me-2"></i>Facebook
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
