@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shipping Information</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Shipping Header -->
    <section class="py-5 bg-gradient-soft">
        <div class="container text-center">
            <h1 class="fw-bold text-primary mb-3">Shipping Information</h1>
            <p class="text-muted lead">Fast, reliable, and secure delivery for your baby's essentials</p>
        </div>
    </section>

    <!-- Shipping Content -->
    <section class="py-5">
        <div class="container">
            <!-- Free Shipping Banner -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="bg-primary text-white rounded-3 p-4 text-center">
                        <h3 class="fw-bold mb-2">
                            <i class="fas fa-truck me-2"></i>FREE SHIPPING on orders over $50!
                        </h3>
                        <p class="mb-0">No promo code needed. Automatically applied at checkout.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Shipping Options -->
                <div class="col-lg-8">
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h3 class="fw-bold text-primary mb-4">Shipping Options & Rates</h3>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Shipping Method</th>
                                        <th>Delivery Time</th>
                                        <th>Cost</th>
                                        <th>Tracking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Standard Shipping</strong><br>
                                            <small class="text-muted">Ground delivery</small>
                                        </td>
                                        <td>5-7 business days</td>
                                        <td>
                                            <span class="text-decoration-line-through text-muted">$5.99</span><br>
                                            <strong class="text-success">FREE over $50</strong>
                                        </td>
                                        <td><i class="fas fa-check text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Express Shipping</strong><br>
                                            <small class="text-muted">Expedited delivery</small>
                                        </td>
                                        <td>2-3 business days</td>
                                        <td>$12.99</td>
                                        <td><i class="fas fa-check text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Overnight Shipping</strong><br>
                                            <small class="text-muted">Next business day</small>
                                        </td>
                                        <td>1 business day</td>
                                        <td>$24.99</td>
                                        <td><i class="fas fa-check text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Same Day Delivery</strong><br>
                                            <small class="text-muted">Select cities only</small>
                                        </td>
                                        <td>Same day</td>
                                        <td>$19.99</td>
                                        <td><i class="fas fa-check text-success"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Processing Time -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-primary mb-3">Order Processing</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-clock text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Processing Time</h6>
                                        <p class="text-muted mb-0">Orders placed before 2 PM EST are processed the same
                                            business day. Orders placed after 2 PM EST or on weekends are processed the next
                                            business day.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-calendar text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Business Days</h6>
                                        <p class="text-muted mb-0">Monday through Friday, excluding federal holidays.
                                            Weekend orders are processed on the next business day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Areas -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-primary mb-3">Shipping Areas</h4>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="shipping-area p-3 border rounded-3">
                                    <h6 class="fw-bold text-success mb-2">
                                        <i class="fas fa-map-marker-alt me-2"></i>Domestic Shipping
                                    </h6>
                                    <p class="text-muted mb-2">We ship to all 50 US states, including:</p>
                                    <ul class="text-muted small">
                                        <li>Continental United States</li>
                                        <li>Alaska & Hawaii</li>
                                        <li>US Territories (additional fees may apply)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shipping-area p-3 border rounded-3">
                                    <h6 class="fw-bold text-info mb-2">
                                        <i class="fas fa-globe me-2"></i>International Shipping
                                    </h6>
                                    <p class="text-muted mb-2">Currently available to:</p>
                                    <ul class="text-muted small">
                                        <li>Canada</li>
                                        <li>United Kingdom</li>
                                        <li>Australia</li>
                                        <li>More countries coming soon!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Special Items -->
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h4 class="fw-bold text-primary mb-3">Special Shipping Information</h4>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="special-item">
                                    <h6 class="fw-bold mb-2">
                                        <i class="fas fa-box text-warning me-2"></i>Large Items
                                    </h6>
                                    <p class="text-muted small">Cribs, high chairs, and other large items may require
                                        special handling and additional shipping time (7-14 business days).</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="special-item">
                                    <h6 class="fw-bold mb-2">
                                        <i class="fas fa-snowflake text-blue me-2"></i>Temperature Sensitive
                                    </h6>
                                    <p class="text-muted small">Some baby care products may require temperature-controlled
                                        shipping during extreme weather conditions.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="special-item">
                                    <h6 class="fw-bold mb-2">
                                        <i class="fas fa-gift text-pink me-2"></i>Gift Orders
                                    </h6>
                                    <p class="text-muted small">Gift orders can be shipped directly to the recipient with a
                                        personalized message at no extra charge.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="special-item">
                                    <h6 class="fw-bold mb-2">
                                        <i class="fas fa-shield-alt text-success me-2"></i>Signature Required
                                    </h6>
                                    <p class="text-muted small">Orders over $200 require adult signature upon delivery for
                                        security purposes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Order Tracking -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Track Your Order</h5>
                        <p class="text-muted mb-3">Enter your order number to track your shipment:</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Order #BB001234">
                            <button class="btn btn-primary" type="button">Track</button>
                        </div>
                        <small class="text-muted">You can also track your order by logging into your account.</small>
                    </div>

                    <!-- Shipping Calculator -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Shipping Calculator</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" placeholder="Enter ZIP code">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Order Total</label>
                                <input type="number" class="form-control" placeholder="$0.00">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">Calculate Shipping</button>
                        </form>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-light-pink rounded-3 p-4">
                        <h5 class="fw-bold text-primary mb-3">Need Help?</h5>
                        <p class="text-muted mb-3">Have questions about shipping? Our customer service team is here to
                            help!</p>
                        <div class="d-grid gap-2">
                            <a href="contact.html" class="btn btn-primary rounded-pill">Contact Support</a>
                            <a href="faq.html" class="btn btn-outline-primary rounded-pill">View FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Why Choose Our Shipping?</h2>
                <p class="text-muted">We're committed to getting your baby's essentials to you safely and quickly</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold mb-2">Fast Delivery</h5>
                        <p class="text-muted">Quick processing and multiple shipping options to get your order to you fast.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold mb-2">Secure Packaging</h5>
                        <p class="text-muted">All items are carefully packaged to ensure they arrive in perfect condition.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-search-location fa-3x text-info mb-3"></i>
                        <h5 class="fw-bold mb-2">Real-Time Tracking</h5>
                        <p class="text-muted">Track your package every step of the way with detailed tracking information.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-headset fa-3x text-warning mb-3"></i>
                        <h5 class="fw-bold mb-2">24/7 Support</h5>
                        <p class="text-muted">Our customer service team is available to help with any shipping questions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
