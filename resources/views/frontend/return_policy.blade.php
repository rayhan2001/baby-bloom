@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Returns & Exchanges</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Returns Header -->
    <section class="py-5 bg-gradient-soft">
        <div class="container text-center">
            <h1 class="fw-bold text-primary mb-3">Returns & Exchanges</h1>
            <p class="text-muted lead">Easy returns and exchanges for your peace of mind</p>
        </div>
    </section>

    <!-- Returns Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Return Policy Overview -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h3 class="fw-bold text-primary mb-4">Our Return Policy</h3>
                        <div class="row g-4">
                            <div class="col-md-4 text-center">
                                <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">30 Days</h5>
                                <p class="text-muted">Return window from delivery date</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-shipping-fast fa-3x text-success mb-3"></i>
                                <h5 class="fw-bold">Free Returns</h5>
                                <p class="text-muted">On defective or damaged items</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-money-bill-wave fa-3x text-info mb-3"></i>
                                <h5 class="fw-bold">Full Refund</h5>
                                <p class="text-muted">Original payment method</p>
                            </div>
                        </div>
                    </div>

                    <!-- Return Process -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-primary mb-4">How to Return an Item</h4>

                        <div class="return-steps">
                            <div class="step-item d-flex align-items-start mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <span class="fw-bold">1</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Initiate Return Request</h6>
                                    <p class="text-muted mb-0">Log into your account and go to "Order History". Find your
                                        order and click "Return Items" or contact our customer service team.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <span class="fw-bold">2</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Print Return Label</h6>
                                    <p class="text-muted mb-0">We'll email you a prepaid return shipping label. Print it out
                                        and attach it to your package.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <span class="fw-bold">3</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Package Your Items</h6>
                                    <p class="text-muted mb-0">Pack items in original packaging with all tags and
                                        accessories. Include the return form in the package.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <span class="fw-bold">4</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Ship Your Return</h6>
                                    <p class="text-muted mb-0">Drop off your package at any UPS location or schedule a
                                        pickup. Track your return using the provided tracking number.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Return Conditions -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-primary mb-4">Return Conditions</h4>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="condition-card border rounded-3 p-3 h-100">
                                    <h6 class="fw-bold text-success mb-2">
                                        <i class="fas fa-check-circle me-2"></i>Returnable Items
                                    </h6>
                                    <ul class="text-muted small mb-0">
                                        <li>Unused items in original condition</li>
                                        <li>Items with original tags attached</li>
                                        <li>Items in original packaging</li>
                                        <li>Defective or damaged items</li>
                                        <li>Wrong item received</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="condition-card border rounded-3 p-3 h-100">
                                    <h6 class="fw-bold text-danger mb-2">
                                        <i class="fas fa-times-circle me-2"></i>Non-Returnable Items
                                    </h6>
                                    <ul class="text-muted small mb-0">
                                        <li>Personalized or customized items</li>
                                        <li>Items damaged by misuse</li>
                                        <li>Items without original packaging</li>
                                        <li>Hygiene-sensitive products (opened)</li>
                                        <li>Items returned after 30 days</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Exchange Policy -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-primary mb-4">Exchange Policy</h4>
                        <p class="text-muted mb-3">We offer exchanges for size, color, or style within 30 days of delivery.
                        </p>

                        <div class="exchange-info">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-exchange-alt text-primary me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Size Exchanges</h6>
                                            <p class="text-muted small mb-0">Free exchanges for different sizes of the same
                                                item.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-palette text-primary me-3 mt-1"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Color/Style Exchanges</h6>
                                            <p class="text-muted small mb-0">Exchange for different color or style of same
                                                item.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refund Information -->
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h4 class="fw-bold text-primary mb-4">Refund Information</h4>

                        <div class="refund-timeline">
                            <div class="timeline-item d-flex align-items-start mb-3">
                                <i class="fas fa-clock text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Processing Time</h6>
                                    <p class="text-muted mb-0">Refunds are processed within 3-5 business days after we
                                        receive your return.</p>
                                </div>
                            </div>
                            <div class="timeline-item d-flex align-items-start mb-3">
                                <i class="fas fa-credit-card text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Refund Method</h6>
                                    <p class="text-muted mb-0">Refunds are issued to your original payment method (credit
                                        card, PayPal, etc.).</p>
                                </div>
                            </div>
                            <div class="timeline-item d-flex align-items-start">
                                <i class="fas fa-calendar text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Bank Processing</h6>
                                    <p class="text-muted mb-0">It may take 5-10 business days for the refund to appear on
                                        your statement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Quick Return -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Quick Return</h5>
                        <p class="text-muted mb-3">Start your return process here:</p>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Order Number</label>
                                <input type="text" class="form-control" placeholder="BB001234">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="your@email.com">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">Start Return</button>
                        </form>
                        <hr>
                        <p class="text-muted small mb-0">Or <a href="account.html">log into your account</a> to manage
                            returns.</p>
                    </div>

                    <!-- Return Status -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Check Return Status</h5>
                        <p class="text-muted mb-3">Track your return progress:</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Return #RT001234">
                            <button class="btn btn-primary" type="button">Track</button>
                        </div>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-light-pink rounded-3 p-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Need Help?</h5>
                        <p class="text-muted mb-3">Our customer service team is here to assist with your return.</p>
                        <div class="contact-options">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <span class="small">1-800-BABY-BLOOM</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <span class="small">returns@babybloom.com</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-comments text-primary me-2"></i>
                                <span class="small">Live Chat Available</span>
                            </div>
                        </div>
                        <a href="contact.html" class="btn btn-primary w-100 rounded-pill">Contact Support</a>
                    </div>

                    <!-- Return Tips -->
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h5 class="fw-bold text-primary mb-3">Return Tips</h5>
                        <div class="tips-list">
                            <div class="tip-item d-flex align-items-start mb-3">
                                <i class="fas fa-lightbulb text-warning me-2 mt-1"></i>
                                <p class="text-muted small mb-0">Keep original packaging until you're sure you want to keep
                                    the item.</p>
                            </div>
                            <div class="tip-item d-flex align-items-start mb-3">
                                <i class="fas fa-lightbulb text-warning me-2 mt-1"></i>
                                <p class="text-muted small mb-0">Take photos of any defects before returning damaged items.
                                </p>
                            </div>
                            <div class="tip-item d-flex align-items-start">
                                <i class="fas fa-lightbulb text-warning me-2 mt-1"></i>
                                <p class="text-muted small mb-0">Save your return tracking number until refund is
                                    processed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Return Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Why Our Return Policy Rocks</h2>
                <p class="text-muted">We make returns and exchanges as easy as possible</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold mb-2">30-Day Window</h5>
                        <p class="text-muted">Plenty of time to decide if you love your purchase.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-shipping-fast fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold mb-2">Free Return Shipping</h5>
                        <p class="text-muted">No cost to return defective or damaged items.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-undo fa-3x text-info mb-3"></i>
                        <h5 class="fw-bold mb-2">Easy Process</h5>
                        <p class="text-muted">Simple online return process with prepaid labels.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card bg-white rounded-3 shadow-sm p-4 text-center h-100">
                        <i class="fas fa-money-bill-wave fa-3x text-warning mb-3"></i>
                        <h5 class="fw-bold mb-2">Quick Refunds</h5>
                        <p class="text-muted">Fast processing and refunds to original payment method.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
