@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Header -->
    <section class="py-4 bg-gradient-soft">
        <div class="container">
            <div class="text-center">
                <h1 class="fw-bold text-primary mb-2">Get in Touch</h1>
                <p class="text-muted mb-0">We're here to help with all your baby care needs</p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form bg-white rounded-3 shadow-sm p-5">
                        <h3 class="fw-bold text-primary mb-4">Send us a Message</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <select class="form-select" id="subject" required>
                                        <option value="">Choose a subject...</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="order">Order Support</option>
                                        <option value="product">Product Question</option>
                                        <option value="shipping">Shipping & Returns</option>
                                        <option value="complaint">Complaint</option>
                                        <option value="suggestion">Suggestion</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe to our newsletter for baby care tips and exclusive offers
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="contact-info">
                        <!-- Store Info -->
                        <div class="info-card bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-store me-2"></i>Store Information
                            </h5>
                            <div class="info-item d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt text-pink me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Address</h6>
                                    <p class="text-muted mb-0">123 Baby Street<br>New York, NY 10001</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-start mb-3">
                                <i class="fas fa-phone text-blue me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Phone</h6>
                                    <p class="text-muted mb-0">+1 (555) 123-BABY<br>+1 (555) 123-2229</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-start mb-3">
                                <i class="fas fa-envelope text-mint me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Email</h6>
                                    <p class="text-muted mb-0">info@babybloom.com<br>support@babybloom.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="info-card bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-clock me-2"></i>Business Hours
                            </h5>
                            <div class="hours-list">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Monday - Friday</span>
                                    <span class="fw-bold">9:00 AM - 8:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Saturday</span>
                                    <span class="fw-bold">10:00 AM - 6:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Sunday</span>
                                    <span class="fw-bold">12:00 PM - 5:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Holidays</span>
                                    <span class="text-muted">Closed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Support -->
                        <div class="info-card bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-headset me-2"></i>Quick Support
                            </h5>
                            <div class="support-options">
                                <a href="#" class="btn btn-outline-primary rounded-pill w-100 mb-2">
                                    <i class="fas fa-comments me-2"></i>Live Chat
                                </a>
                                <a href="tel:+15551232229" class="btn btn-outline-pink rounded-pill w-100 mb-2">
                                    <i class="fas fa-phone me-2"></i>Call Now
                                </a>
                                <a href="#" class="btn btn-outline-mint rounded-pill w-100">
                                    <i class="fas fa-question-circle me-2"></i>FAQ
                                </a>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="info-card bg-white rounded-3 shadow-sm p-4">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-share-alt me-2"></i>Follow Us
                            </h5>
                            <div class="social-links d-flex justify-content-around">
                                <a href="#" class="btn btn-outline-primary rounded-circle">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-pink rounded-circle">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-blue rounded-circle">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-mint rounded-circle">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold text-primary">Visit Our Store</h3>
                <p class="text-muted">Come see our products in person and get expert advice</p>
            </div>
            <div class="map-container bg-white rounded-3 shadow-sm p-4">
                <div class="map-placeholder bg-light rounded-3 d-flex align-items-center justify-content-center"
                    style="height: 400px;">
                    <div class="text-center">
                        <i class="fas fa-map-marked-alt fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">Interactive Map</h5>
                        <p class="text-muted">123 Baby Street, New York, NY 10001</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-primary rounded-pill">
                            <i class="fas fa-external-link-alt me-2"></i>Open in Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold text-primary">Frequently Asked Questions</h3>
                <p class="text-muted">Quick answers to common questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item rounded-3 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer a 30-day return policy for all unused items in original packaging.
                                    Baby safety items and personalized products cannot be returned for hygiene reasons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-3 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you offer free shipping?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We offer free standard shipping on all orders over $50.
                                    Express and overnight shipping options are available for an additional fee.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-3 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Are your products safe for babies?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    All our products meet or exceed safety standards.
                                    We only work with certified manufacturers and test all products for safety and quality.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-3 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How can I track my order?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Once your order ships, you'll receive a tracking number via email.
                                    You can also track your order by logging into your account on our website.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you have a physical store?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! Our flagship store is located at 123 Baby Street in New York.
                                    Visit us to see products in person and get expert advice from our staff.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
